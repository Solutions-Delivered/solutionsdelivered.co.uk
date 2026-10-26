// Build check: node scripts/check-build.mjs [distDir]
// Pages exist, no template leftovers, internal links resolve, sitemap URLs exist,
// and the contact/thanks/error/privacy pages meet the site-forms contract
// (mirrors ~/code/site-forms/scripts/check-sites.ts, but against the build output).
import fs from 'node:fs';
import path from 'node:path';

const dist = path.resolve(process.argv[2] ?? 'dist');
const ORIGIN = 'https://solutionsdelivered.co.uk';
const TURNSTILE_KEY = '0x4AAAAAAFmU8ymEyIhH_FIC';
const PRIVACY_MARKER = 'Submissions are deleted automatically after 90 days';
const FORM_FIELDS = new Set(['name', 'email', 'company', 'message', 'package', 'privacy_consent']);
const PLUMBING = new Set(['website', '_t', 'cf-turnstile-response']);

let failures = 0;
const check = (ok, msg) => {
  if (!ok) { failures++; console.log('FAIL ' + msg); }
};

const read = (rel) => fs.readFileSync(path.join(dist, rel), 'utf8');
const exists = (rel) => fs.existsSync(path.join(dist, rel));

// ---- expected pages -------------------------------------------------------
const guideSlugs = fs.readdirSync(path.resolve('..', 'content', 'guides')).filter((f) => f.endsWith('.md'))
  .map((f) => /^slug:\s*(\S+)/m.exec(fs.readFileSync(path.resolve('..', 'content', 'guides', f), 'utf8'))[1].replace(/["']/g, ''));
const pages = ['', 'ai-foundations', 'foundations-os', 'how-it-works', 'consultancy', 'outsourced-it-director', 'guides', 'about',
  'contact', 'contact/thanks', 'contact/error', 'privacy', 'terms', 'thank-you/foundations-os', ...guideSlugs.map((s) => `guides/${s}`)];
for (const p of pages) check(exists(path.join(p, 'index.html')), `page missing: /${p}`);
for (const f of ['404.html', 'sitemap.xml', 'llms.txt', 'robots.txt', 'brochure.pdf', 'logo.svg', 'logo.png', 'logo@2x.png', 'og-image.png', '_redirects', '_headers', 'assets/app.css', 'assets/app.js', 'assets/alpine.js']) {
  check(exists(f), `file missing: ${f}`);
}

// ---- walk html ------------------------------------------------------------
const htmlFiles = [];
(function walk(d) {
  for (const e of fs.readdirSync(d, { withFileTypes: true })) {
    const p = path.join(d, e.name);
    if (e.isDirectory()) walk(p);
    else if (e.name.endsWith('.html')) htmlFiles.push(p);
  }
})(dist);

// ---- redirects ------------------------------------------------------------
const redirects = new Map();
if (exists('_redirects')) {
  for (const line of read('_redirects').split('\n')) {
    const [from, to] = line.trim().split(/\s+/);
    if (from && !from.startsWith('#')) redirects.set(from, to);
  }
}

function resolves(urlPath) {
  const p = decodeURIComponent(urlPath);
  if (redirects.has(p)) return resolves(redirects.get(p));
  if (p === '/') return exists('index.html');
  const rel = p.replace(/^\//, '').replace(/\/$/, '');
  return exists(rel) && fs.statSync(path.join(dist, rel)).isFile() || exists(rel + '.html') || exists(path.join(rel, 'index.html'));
}

const LEFTOVER = /(\{\{|\}\}|\{%|%\}|\{!!|!!\}|<x-|<\/x-|MANUAL|(^|[\s>])@(extends|section|endsection|yield|include|foreach|endforeach|if|elseif|else|endif|unless|endunless|php|endphp|push|endpush|stack|csrf|honeypot|vite|props|error|enderror)\b)/m;

for (const file of htmlFiles) {
  const rel = '/' + path.relative(dist, file);
  const html = fs.readFileSync(file, 'utf8');
  const m = LEFTOVER.exec(html);
  check(!m, `template leftover in ${rel}: ${m && JSON.stringify(html.slice(Math.max(0, m.index - 30), m.index + 50))}`);
  check(/<title>[^<]+<\/title>/.test(html), `no title in ${rel}`);
  check((html.match(/<h1\b/g) ?? []).length === 1, `${rel} should have exactly one h1`);
  for (const [, attr, url] of html.matchAll(/\s(href|src|srcset)="([^"]+)"/g)) {
    const candidates = attr === 'srcset' ? url.split(',').map((s) => s.trim().split(/\s+/)[0]) : [url];
    for (let u of candidates) {
      if (/^(mailto:|tel:|#|data:|javascript:)/.test(u)) continue;
      if (u.startsWith(ORIGIN)) u = u.slice(ORIGIN.length) || '/';
      else if (/^[a-z]+:\/\//.test(u) || u.startsWith('//')) continue;
      const clean = u.split('#')[0].split('?')[0];
      if (clean === '') continue;
      check(clean.startsWith('/') && resolves(clean), `broken link in ${rel}: ${u}`);
    }
  }
}

// ---- sitemap --------------------------------------------------------------
const sitemap = read('sitemap.xml');
const locs = [...sitemap.matchAll(/<loc>\s*([^<\s]+)\s*<\/loc>/g)].map((m) => m[1]);
check(locs.length > 0, 'sitemap has no URLs');
for (const loc of locs) {
  check(loc.startsWith(ORIGIN), `sitemap URL off-origin: ${loc}`);
  check(resolves(loc.slice(ORIGIN.length) || '/'), `sitemap URL does not exist: ${loc}`);
}
const norm = (u) => u.replace(/\/$/, '');
for (const u of ['/contact/thanks', '/contact/error', '/thank-you/foundations-os', '/ai-foundations']) {
  check(!locs.some((l) => norm(l) === ORIGIN + u), `${u} must not be in the sitemap`);
}
check(/Sitemap:\s*\S+/i.test(read('robots.txt')), 'robots.txt lacks a Sitemap line');

// ---- site-forms contract --------------------------------------------------
const attr = (tag, name) => { const m = tag.match(new RegExp(`\\s${name}\\s*=\\s*(?:"([^"]*)"|'([^']*)'|([^\\s>]+))`, 'i')); return m ? (m[1] ?? m[2] ?? m[3]) : null; };
const contact = read('contact/index.html');
const form = contact.match(/<form\b[^>]*>[\s\S]*?<\/form>/i)?.[0];
check(!!form && attr(form.match(/<form\b[^>]*>/i)[0], 'action') === 'https://form.solutionsdelivered.co.uk/', 'form posts to https://form.solutionsdelivered.co.uk/');
if (form) {
  check((attr(form.match(/<form\b[^>]*>/i)[0], 'method') ?? '').toLowerCase() === 'post', 'form method post');
  const controls = [...form.matchAll(/<(input|textarea|select)\b[^>]*>/gi)].map((m) => m[0]);
  const byName = new Map(controls.map((c) => [attr(c, 'name') ?? '', c]));
  for (const n of ['name', 'email', 'message', 'privacy_consent']) check(byName.has(n) && /\srequired\b/i.test(byName.get(n)), `field ${n} present and required`);
  check(/type="?checkbox/i.test(byName.get('privacy_consent') ?? '') && attr(byName.get('privacy_consent') ?? '', 'value') === '1', 'privacy_consent is a checkbox with value 1');
  check(byName.has('website'), 'honeypot website');
  check(byName.has('_t'), 'hidden _t');
  const extra = [...byName.keys()].filter((n) => n && !FORM_FIELDS.has(n) && !PLUMBING.has(n));
  check(extra.length === 0, `unexpected form fields: ${extra.join(', ')}`);
  check(form.includes(`data-sitekey="${TURNSTILE_KEY}"`), 'Turnstile widget with the site-forms key');
  check(form.indexOf('privacy_consent') < form.indexOf('cf-turnstile'), 'consent box comes before the Turnstile widget');
  check(/href="[^"]*\/privacy"/.test(form.slice(form.indexOf('privacy_consent'))), 'consent label links to /privacy');
}
check(/challenges\.cloudflare\.com\/turnstile\/v0\/api\.js/.test(contact), 'Turnstile script loaded');
check(/name="_t"[\s\S]*Date\.now\(\)|Date\.now\(\)[\s\S]*_t/.test(contact), '_t set by an inline script');
for (const p of ['contact/thanks', 'contact/error', 'thank-you/foundations-os']) {
  check(/<meta[^>]+name="robots"[^>]*noindex/i.test(read(path.join(p, 'index.html'))), `${p} is noindex`);
}
const privacy = read('privacy/index.html');
check(privacy.includes(PRIVACY_MARKER), 'privacy page has the site-forms paragraph');
check(privacy.includes('Brevo') && privacy.includes('Cloudflare'), 'privacy lists Cloudflare and Brevo');

// ---- headers / redirects --------------------------------------------------
check(/\/brochure\.pdf\s*\n(\s+.*\n)*?\s+X-Robots-Tag:\s*noindex/.test(read('_headers')), '_headers marks /brochure.pdf noindex');
for (const [from, to] of redirects) check(resolves(to) , `redirect target missing: ${from} -> ${to}`);

console.log(failures ? `\n${failures} check(s) failed` : `ok: ${htmlFiles.length} html files, ${locs.length} sitemap URLs`);
process.exit(failures ? 1 : 0);
