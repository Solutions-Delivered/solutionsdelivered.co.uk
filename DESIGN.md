# SolutionsDelivered.co.uk: Design system (v1, proposed)

*Proposed design system for Solutions Delivered, built as the sibling of SamJenkins.com so the two read as one family. Created 2026-06-13 as part of the brand-family review. This is a sign-off proposal and a build brief for Claude Code. There is no canonical DESIGN.md for this site yet; on approval this becomes it, saved to a Solutions Delivered Resources folder. Nothing is live until Sam signs off and Claude Code applies it.*

*Companion files: `SamJenkins.com-DESIGN.md` (the sibling system, the primary reference for shared tokens), `../anti-ai-web-design-tells.md` (run as a build pass; this site currently trips several tells), `../brand-family-review.md` (the why). Canonical product words and prices: `HQs/Solutions Delivered/products/product-definitions.md`.*

---

## 0. Confirmed direction (decided 2026-06-13)

Solutions Delivered **leads with the productised-AI offer** (AI Foundations, the Foundations OS) and **keeps the IT and consultancy work** as a present, ongoing service, not the headline. Sam still delivers IT and is taking current contracts, so nothing is dropped. The four legacy services consolidate into a single **Consultancy** page. The IT delivery is reframed as proof for the AI work: the positioning line is *"We don't just talk about AI; we use it in our day-to-day work. Real work, not clicks."* Fifteen years shipping systems businesses depend on is the credibility behind the AI offer, which suits the no-hype, practitioner brand.

## 1. Identity in one line

The same warm, clean family as SamJenkins.com, dialled slightly more structured and businesslike. This is the firm: it speaks as "we", leads with the productised AI offer, and carries pricing and proof. Sans headlines instead of the personal site's serif mark the difference between the firm and the person.

The current site is a generic bright-blue agency template (gradient hero, icon-card carousel, values triad, "trusted partner" copy). v1 replaces that with the shared restrained kit, so it stops looking like any-IT-consultancy and starts looking like Sam's family.

## 2. The brand family

One family, two dialects. SolutionsDelivered.co.uk shares all tokens and components with SamJenkins.com; it differs in person and density.

**Shared (identical to SamJenkins.com):** colour tokens, type families, spacing and radius scale, component kit, no-hype voice, accessibility floor, anti-AI design rules.

**This site's dialect (the firm, "we"):** sans headlines (Hanken Grotesk, not the serif), a slightly more structured and denser layout, pricing and offer pages, first-person-plural voice. Confident and clear, still warm, never corporate-template.

**The sibling's dialect (the person, "I"):** serif headlines, warmer, photo-forward, the thinking hub. See `SamJenkins.com-DESIGN.md`.

The test: blur the words on a thumbnail and you should know it is Sam's family, and know this is the firm not the person.

---

## 3. Foundations (shared tokens)

These are identical to SamJenkins.com so the family holds. Restated here so this file is self-contained for the build.

### Colour: light theme (default)

| Token | Hex | Use |
|---|---|---|
| `--bg` | `#FBFAF7` | Page background. Warm off-white, not pure white, not the old bright blue. |
| `--surface` | `#FFFFFF` | Cards, panels, inputs. |
| `--panel` | `#F3F0EA` | Warm secondary panel (alternating sections, footer). |
| `--border` | `#E7E2D8` | Hairline borders. |
| `--border-strong` | `#D8D2C5` | Hover / emphasis borders. |
| `--ink` | `#16223A` | Headings. Deep warm navy. |
| `--text` | `#2C3645` | Body text. |
| `--muted` | `#6B7382` | Secondary copy, captions. |
| `--faint` | `#9A8E78` | Hints, footnotes. |
| `--blue` | `#2F6BED` | The shared brand blue. Links, primary CTA, focus. Replaces the old saturated royal-blue gradient. |
| `--blue-deep` | `#1E4FB8` | Hover / active, blue text on light fills. |
| `--blue-tint` | `#E8F0FE` | Faint blue info surface. |
| `--warm` | `#DC7A3C` | Warm secondary accent, used sparingly (a heading underline, the monogram corner). Never a button. |
| `--warm-soft` | `#F7E8D8` | Faint warm fill. |
| Error | `#C0362C` | Form validation only. |

Same rule as the sibling: one chromatic brand colour (blue) plus one warm accent. No third hue. The old royal-blue gradient hero is retired.

### Colour: dark theme (secondary, optional)

Same warm-dark tokens as `SamJenkins.com-DESIGN.md` section 3 (`--bg #13161C`, `--surface #1B1F27`, `--ink #F2F0EC`, `--text #D7DAE1`, `--blue #6FA0F2`, `--warm #E89A5C`). Light is the default.

### Typography

- **Headings:** `Hanken Grotesk` (Google Fonts), weight 500/600, `tracking-tight`. This site uses Hanken Grotesk for both headings and body, differentiated by weight and size; sans headlines are its distinction from the personal site's Fraunces serif. (Optional: `Fraunces` may appear in a single large pull-quote or testimonial as a family nod, but default headlines are sans.)
- **Body / UI:** `Hanken Grotesk`, weight 400/500.
- **Mono:** `IBM Plex Mono`, code and the rare metadata stamp only.

Type scale matches the sibling (Hero H1 40–52px, Page H1 30–36px, Section H2 24–28px, body 16–18px, eyebrow 12–13px Hanken Grotesk uppercase). Headings are Hanken Grotesk here rather than Fraunces.

### Spacing, layout, borders, motion, icons

All identical to `SamJenkins.com-DESIGN.md`:
- 4px spacing scale; generous whitespace; text measure ~60–75ch.
- Container up to ~1080px; reading/offer text columns narrower.
- Borders carry structure; radius 6 / 10 / 14; shadows barely-there or none; never glow or gradient.
- One entrance animation; colour-only hovers; no carousels, parallax, auto-play, or animated counters.
- Inline SVG icons, functional not decorative. (The current site's blue rounded-square icon-card tiles are retired.)

### Imagery and photography

- **Allowed:** real photos of Sam (he is the firm's face), real screenshots of the Foundations OS / AI Foundations work, honest diagrams as SVG.
- **Banned:** stock photography, AI-generated imagery, decorative blobs/gradients, the generic "team around a laptop" genre. (Same as the sibling and the anti-AI file.)

---

## 4. Voice and content

Full rules in `context/voice-principles.md` and `context/anti-ai-style.md`. The site-specific layer:

- **First person plural, "we".** This is the firm. "We build", "we run the cohort", "we help". (The personal site uses "I". Do not mix.)
- **UK English throughout.** The current site mixes US and UK spelling ("optimizing", "standardization", "organizations" alongside "specialise", "organisation"). Fix every one: optimise, standardisation, organisation, prioritise, etc.
- **No hype, no template filler.** Cut the current copy's "trusted partner", "drive real results", "sustainable growth and operational excellence", "Ready to Get Started?", and the Integrity / Collaboration / Excellence values triad. Say the specific thing the offer does instead.
- **No em-dashes**, no emoji in user-facing copy.
- **Pricing display (business rule):** prices are **ex-VAT by default and labelled** ("£197 ex-VAT", "+ VAT"). If a gross figure is shown for a consumer-facing reason, label it inc-VAT clearly. Source of truth for prices and product words is `products/product-definitions.md`.
- **Display casing:** `Solutions Delivered` and `SolutionsDelivered.co.uk` (camel case) in visible copy; lowercase in URL fields. Title pattern: `Page name | Solutions Delivered`.

## 5. Positioning and content (depends on decision 0)

Move the site onto the current productised-AI story. The canonical product spec is `products/product-definitions.md`; do not restate prices or inclusions here, link the build to that file. In summary the offer ladder is:

- **The Foundations OS**: self-serve download (£197–297 ex-VAT). The spearhead.
- **AI Foundations**: 4-week done-with-you cohort (£1,500 ex-VAT; founding £750 ex-VAT).
- Planned later: the AI Operating System, the Operator's Room, Done-For-You. (Show only what is sellable; do not advertise unbuilt tiers as live.)

The free top of funnel is the Practically AI newsletter and the Digital Employee Blueprint, which live primarily on SamJenkins.com; Solutions Delivered links to them and hosts the offer and checkout.

**Consultancy (confirmed).** Web Development, Service Management, Project Management and Business Change consolidate into a single **Consultancy** page, kept because Sam still delivers this work (and project management is not always IT-related). It sits in the nav but is not the headline; the AI offer leads. The IT delivery is framed as proof of competence for the AI work ("real work, not clicks"), not a competing message.

## 6. Social proof

Same discipline as the sibling: real, and aggregate / client / honest, never invented.

- **Client testimonials and short case studies** from real engagements, with a real name and company. (The current site has none.)
- **Real client or partner logos** only if true; no greyed-out filler bar.
- **Concrete outcomes** ("a working automation live on their stack", "their AI now sounds like the business"), not adjectives.
- **Retire:** the "WCAG 2.2 Compliant / Direct Team Collaboration / No-Bloat Philosophy" badge row as a hero trust device (WCAG compliance is a floor, keep it as a quiet commitment lower down), the values triad, and any animated counters.
- Sam is the credible face; a real photo and the founder story are fair proof for a small firm.

## 7. Components

Shared kit with the sibling (nav, buttons, cards, inputs, borders, focus, footer). Solutions-Delivered-specific:

### Nav
- Left: `Solutions Delivered` wordmark in **Hanken Grotesk 600** (not Fraunces), beside the `SD` monogram: the same `--ink` rounded tile with white initials and a `--warm` corner dot as the `SJ` mark (see `assets/favicon-sd.svg`). The `SD` monogram is the **favicon**.
- Right: visible links, one solid-blue CTA. No "Get Started" pill repeated everywhere; one clear primary action.

### Hero
- Left-aligned, Hanken Grotesk H1 (not the old centred white-on-blue-gradient), `--bg` background, one blue CTA plus one text link. No gradient, no reversed-text hero.

### Offer / pricing card
- Bordered `--surface` card, `10px` radius. Product name (Hanken Grotesk 600), one-line promise, what-you-get list (plain sentences, not emoji bullets), price labelled ex-VAT, one blue CTA. If one tier is the recommended start, accent its border (2px `--blue`) and a small "Start here" label, not a loud "most popular" banner.

### Process steps
- Reuse the existing genuinely-good "How We Engage" four-step content (Initial Discussion, Proposal & Planning, Collaborative Delivery, Handover & Support), restyled as numbered items with hairline borders, no icon tiles. Adapt the wording to the AI offer.

### Good-fit panel
- Keep the existing "When we're a good fit" content (it is honest and on-brand), restyled. A strong differentiator: direct access, no account managers, 24-hour response, no bloat.

### FAQ
- Plain accordion or a simple Q/A list for the offer pages. Real questions, plain answers.

### Footer
- Real channels and the legal pages. Cookie consent must be privacy-first (decline as easy as accept); re-check the current banner, which should not dark-pattern the decline.

## 8. Information architecture

### Current pages (audited 2026-06-13)

- **Home**: bright-blue gradient hero, service-card carousel, "Our Core Services" (legacy), "Our Approach", trust-badge row, cookie banner.
- **About**: generic consultancy copy, values triad, old three-pillar focus (Service / Project Management, Business Change).
- **Solutions**: the four legacy services in detail.
- **How We Work**: a solid four-step process, "what to expect", "when we're a good fit". Good bones.
- **Careers**: present.
- **Get Started / Contact**: "free initial consultation" CTA.

### Proposed page set (v1, assuming the AI pivot)

| Page | Status | Notes |
|---|---|---|
| Home | rebuild | New look; lead with the AI offer and the outcome ("AI that sounds like your business and actually gets used"), the ladder at a glance, proof, one clear CTA. Kill the gradient hero and the carousel. |
| **AI Foundations** | **NEW (offer page)** | The 4-week cohort. What it is, weekly structure, who it is for, price (ex-VAT), founding offer, FAQ, CTA. Content from `products/product-definitions.md` and the AI Foundations product folder. |
| **The Foundations OS** | **NEW (product page)** | The self-serve download. What you get, who it is for, price, checkout (Lemon Squeezy), FAQ. |
| How it works | rebuild from "How We Work" | Reuse the four-step process and good-fit content, reframed around the AI offer. |
| About | rewrite | The firm and Sam as its face; drop the values triad and generic copy; "we" voice; honest founder story. |
| Contact | keep, simplify | One honest enquiry route; no dark-pattern reassurance filler. |
| Careers | **retire** | Retired for now (not actively hiring). An empty careers page is worse than none. |
| **Consultancy** | **KEEP (consolidated)** | One page consolidating the four legacy services. Present and linked, not the headline. Framed as proof for the AI work. |

### Nav (proposed)

`AI Foundations · The Foundations OS · How it works · Consultancy · About · Contact (CTA)`. One primary CTA, no repeated "Get Started" pills.

## 9. Composition patterns

- **Home:** Hero (Hanken Grotesk H1 + lead + one blue CTA) → the offer ladder at a glance (two live products as offer cards) → how-it-works summary (the four steps) → proof (testimonials / outcomes) → good-fit panel → final CTA. No gradient, no carousel, no values triad.
- **Offer page (AI Foundations):** H1 → the promise → who it is for → weekly structure → what you get (with price, ex-VAT) → proof → FAQ → CTA.
- **Product page (Foundations OS):** H1 → what it is → what you get → price + checkout → FAQ.
- **How it works:** the four numbered steps → what to expect → good fit.

## 10. Accessibility

WCAG 2.2 AA floor, same as the sibling (verified contrast in both modes, `:focus-visible` blue outline, skip link, 24×24px targets, semantic HTML, labelled inputs, reduced-motion, meaningful alt text). Keep the firm's existing genuine WCAG commitment, just stop using the badge as a hero selling point.

## 11. Anti-patterns (this site currently trips several)

Run `../anti-ai-web-design-tells.md` as a build pass. Specifically remove and never reintroduce:

1. The centred bright-blue gradient hero with reversed white text.
2. The sideways-scrolling icon-card service carousel.
3. The blue rounded-square generic icon tiles.
4. The Integrity / Collaboration / Excellence values triad.
5. Template copy: "trusted partner", "drive real results", "sustainable growth", "Ready to Get Started?", "No commitment required".
6. Repeated vague "Get Started" CTAs (use one specific primary action per page).
7. Any animated number counters or fake trust widgets.
8. The mixed US/UK spelling.
9. A cookie banner that dark-patterns the decline.

## 12. Decisions (locked 2026-06-13)

1. Direction: lead with AI, keep IT as a single Consultancy page, reframed as proof (section 0). Confirmed.
2. Shared tokens, light default, native dark mode (no daisyUI, no component library). Confirmed.
3. Type: Hanken Grotesk for headings and body; Fraunces reserved to the personal site; IBM Plex Mono for code. Inter was dropped as an AI-default font. Confirmed.
4. Careers: retired for now. Confirmed.
5. Checkout: Foundations OS via Lemon Squeezy. Confirmed.

Nothing else is outstanding for design. Product words and prices stay sourced from `products/product-definitions.md`.

## 13. Changelog

- **2026-06-13, v1 (proposed).** First design system for Solutions Delivered, built as the sibling of SamJenkins.com. Shared tokens and kit, "we" voice, sans headlines, AI-offer positioning, offer/product pages, retirement of the agency-template tells. Drawn from the brand-family review and the ICP reference scan.
- **2026-06-13, decisions locked (with Sam).** Lead-with-AI confirmed, IT kept as a consolidated Consultancy page and reframed as proof ("real work, not clicks"); Hanken Grotesk type; native no-framework dark mode; Careers retired; Lemon Squeezy checkout. Section 0 updated from open question to confirmed direction.
- **2026-06-13, logo.** Wordmark in Hanken Grotesk 600; `SD` monogram drawn as inline SVG matching the `SJ` mark, reused as the favicon (`assets/favicon-sd.svg`).
