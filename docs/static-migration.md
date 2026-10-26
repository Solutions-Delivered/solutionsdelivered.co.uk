# Move solutionsdelivered.co.uk to a static site

Decided 2026-10-26: rebuild the site in Eleventy and serve it as a Cloudflare
Worker (static assets, Workers Builds), the same pattern as gypu,
backpackingmastery, thebestofbreeds and threeweavers (approved 2026-10-26,
may be revisited). The Laravel app is retired after cutover.

The static source lives in `static-src/` in this repo, so `content/guides/`
stays the single source for the guides.

## How each dynamic part is replaced

| Laravel today | Static |
|---|---|
| `POST /contact` (honeypot, throttle, `ContactFormSubmitted` mail) | site-forms Worker at `form.solutionsdelivered.co.uk`, with `company` and `package` fields; `?package=` copied into the form by a small script |
| `/thank-you/{product}`, checkout verified against the Polar API | Static page. Verification only changed the wording; the download arrives in Polar's own email |
| `cookie-consent` package, GA4 Consent Mode | Small consent banner script, same Consent Mode v2 defaults |
| `Route::redirect`s, `/logo.png`, `/logo@2x.png` | `_redirects` |
| `brochure.pdf` `X-Robots-Tag: noindex` | `_headers` |
| `sitemap.xml`, `llms.txt`, active nav state | Generated at build time |
| `/health` | Dropped; nothing monitors it |

Not carried over: server-side order verification on the thank-you page, the
Pest suite (replaced by a build check and a live parity check).

## Cutover

1. Workers Builds on this repo, root `static-src/`, Worker `solutionsdelivered`.
2. Parity check against the live site: every sitemap URL, title, H1,
   canonical, JSON-LD, images, word count within 1%.
3. Delete the apex A record (rollback target: the old A record to cable),
   add the custom domain, Purge Everything, www redirect rule if needed.
4. site-forms: add the route, dry run, then live, test enquiry.
5. Laravel deploy, Caddy vhost and the empty `solutionsdelivered` database on
   cable are removed not before 2026-11-06.
