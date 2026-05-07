---
version: alpha
name: Solutions Delivered
description: >
  Visual identity for solutionsdelivered.co.uk — a UK-based IT consultancy.
  Tone is professional, calm, and credible: blue primary, generous whitespace,
  rounded surfaces, gradient accents, and WCAG 2.2 AA contrast throughout.
colors:
  primary: "#198fd9"
  primary-mid: "#1a7fc7"
  primary-dark: "#0f6ba8"
  primary-darker: "#0d5a8f"
  accent-success: "#4ade80"
  surface: "#ffffff"
  surface-muted: "#f9fafb"
  surface-inverse: "#111827"
  surface-inverse-mid: "#1f2937"
  on-surface: "#111827"
  on-surface-medium: "#374151"
  on-surface-subtle: "#6b7280"
  on-inverse: "#ffffff"
  on-inverse-subtle: "#9ca3af"
  border: "#e5e7eb"
  border-strong: "#d1d5db"
  error: "#dc2626"
  focus-ring: "rgba(25, 143, 217, 0.5)"
typography:
  display:
    fontFamily: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 1.1
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 1.15
    letterSpacing: -0.015em
  headline-md:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 1.2
  headline-sm:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 1.3
  body-lg:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 1.6
  body-md:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 1.6
  body-sm:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 1.5
  label-md:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 1.4
  label-sm:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 1.4
  eyebrow:
    fontFamily: "{typography.display.fontFamily}"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 1.4
    letterSpacing: 0.1em
rounded:
  none: 0px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 24px
  full: 9999px
spacing:
  base: 16px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 48px
  3xl: 64px
  section-y: 80px
  container-x: 32px
  container-max: 1280px
elevation:
  none: "none"
  sm: "0 1px 2px 0 rgba(0,0,0,0.05)"
  md: "0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1)"
  lg: "0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1)"
  xl: "0 20px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.1)"
  2xl: "0 25px 50px -12px rgba(0,0,0,0.25)"
gradients:
  brand-horizontal: "linear-gradient(to right, {colors.primary}, {colors.primary-mid})"
  brand-hero: "linear-gradient(to bottom right, {colors.primary}, {colors.primary-mid}, {colors.primary-dark})"
  surface-soft: "linear-gradient(to bottom right, {colors.surface-muted}, {colors.surface}, {colors.surface-muted})"
  footer: "linear-gradient(to bottom right, {colors.surface-inverse}, {colors.surface-inverse-mid}, {colors.surface-inverse})"
components:
  button-primary:
    backgroundColor: "{gradients.brand-horizontal}"
    textColor: "{colors.on-inverse}"
    typography: "{typography.label-md}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    elevation: "{elevation.xl}"
  button-primary-on-dark:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
    typography: "{typography.label-md}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    elevation: "{elevation.xl}"
  button-secondary-on-dark:
    backgroundColor: "rgba(255,255,255,0.10)"
    textColor: "{colors.on-inverse}"
    border: "2px solid rgba(255,255,255,0.30)"
    typography: "{typography.label-md}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
  button-nav-cta:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-inverse}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.md}"
    padding: 8px 24px
  card-service:
    backgroundColor: "{colors.surface}"
    rounded: "{rounded.2xl}"
    padding: 32px
    elevation: "{elevation.lg}"
    borderLeft: "4px solid {colors.primary}"
  card-service-hover:
    elevation: "{elevation.2xl}"
    transform: "translateY(-8px)"
    borderLeft: "4px solid {colors.primary-dark}"
  badge-pill:
    backgroundColor: "rgba(255,255,255,0.10)"
    textColor: "{colors.on-inverse}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.full}"
    padding: 8px 16px
    border: "1px solid rgba(255,255,255,0.20)"
  input-text:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    border: "1px solid {colors.border-strong}"
    rounded: "{rounded.md}"
    padding: 12px 16px
  input-text-focus:
    border: "1px solid {colors.primary}"
    ring: "2px solid {colors.focus-ring}"
  link-inline:
    textColor: "{colors.primary}"
    typography: "{typography.label-md}"
  trust-indicator:
    textColor: "currentColor"
    typography: "{typography.body-sm}"
    iconColor: "{colors.accent-success}"
---

## Overview

Solutions Delivered is a UK-based IT consultancy (Web Development, Service Management, Project Management, Business Change). The visual identity is **professional, calm, and trust-led** — designed to read as credible to enterprise buyers without feeling stiff.

**Personality:** competent, approachable, no-bloat. The brand voice mirrors the design — direct, considered, without padding.

**Audience:** SME-to-enterprise procurement and IT decision-makers in the UK. Primary entry point is desktop, but mobile must be first-class.

**Aesthetic anchors:**
- A single dominant blue (`{colors.primary}`) carries the brand. There is no secondary accent colour — depth comes from gradients of the same hue and from generous neutrals.
- Surfaces are **soft and rounded**, not sharp. Cards are `rounded-2xl` (24px). Pills are full-radius.
- **Gradients do the decorative work.** Hero, footer, icon tiles, and primary buttons all use linear gradients within the blue family. Flat fills are reserved for body surfaces and inverse text.
- **Whitespace is non-negotiable.** Sections breathe at 80px+ vertical padding on desktop.
- Visual interest comes from **micro-motion** (hover lifts of `-translate-y-1`, animated arrows, scale on icon tiles) — never from colour clashes or busy patterns.

**Accessibility is a brand value.** WCAG 2.2 AA is the floor, not the goal. Every colour pairing in this document meets ≥ 4.5:1 for body text or ≥ 3:1 for large text and UI components. `prefers-reduced-motion` disables transitions.

## Colors

The palette is **monochromatic blue** plus neutrals plus a single semantic green.

| Token | Hex | Role |
| --- | --- | --- |
| `{colors.primary}` | `#198fd9` | Brand blue. Used for links, primary CTA gradients, focus rings, eyebrow labels, navigation active state. |
| `{colors.primary-mid}` | `#1a7fc7` | Mid-stop in horizontal and hero gradients. Never used as a flat fill on its own. |
| `{colors.primary-dark}` | `#0f6ba8` | End-stop in hero gradient. Hover state for solid-blue buttons (e.g. nav CTA). Used as alternating card-border accent. |
| `{colors.primary-darker}` | `#0d5a8f` | Used only on dark-on-dark CTA hover (e.g. About-page CTA). Reserved — do not introduce new uses. |
| `{colors.accent-success}` | `#4ade80` | The **only** non-blue brand colour (Tailwind `green-400`). Reserved for success/trust signals: trust-indicator checkmarks, the pulsing dot in the hero badge. Never decorative. |
| `{colors.surface}` | `#ffffff` | Default page surface and card surface. |
| `{colors.surface-muted}` | `#f9fafb` | Alternating section background and soft-gradient anchor. |
| `{colors.surface-inverse}` | `#111827` | Footer base. |
| `{colors.surface-inverse-mid}` | `#1f2937` | Footer mid-stop. |
| `{colors.on-surface}` | `#111827` | Body and headline text on light surfaces. 16:1 contrast on white. |
| `{colors.on-surface-medium}` | `#374151` | Secondary body text. |
| `{colors.on-surface-subtle}` | `#6b7280` | Captions, footer body, metadata. Minimum 4.6:1 on white. |
| `{colors.on-inverse}` | `#ffffff` | Text on inverse surfaces and on the brand-hero gradient. |
| `{colors.on-inverse-subtle}` | `#9ca3af` | Footer body text. ≥ 4.5:1 on `{colors.surface-inverse}`. |
| `{colors.border}` | `#e5e7eb` | Hairlines on light surfaces. |
| `{colors.border-strong}` | `#d1d5db` | Form input borders. |
| `{colors.error}` | `#dc2626` | Form validation errors only. |

### Contrast contract

- **Any text** on `{colors.surface}` or `{colors.surface-muted}` uses `{colors.on-surface}`, `{colors.on-surface-medium}`, or `{colors.on-surface-subtle}`.
- **Any text** on `{colors.surface-inverse}` or the brand-hero gradient uses `{colors.on-inverse}` or `{colors.on-inverse-subtle}`.
- `{colors.primary}` on white is **AA for large text and UI components** (3.6:1). Do not use it for body copy paragraphs — use it for links, button gradients, eyebrows, and ≥ 18px semibold labels.
- Pink, magenta, purple, orange, and yellow are **not in the palette**. Any prior use of `#D65FCB` is deprecated and removed.

## Typography

A single typeface family is used: the **system UI font stack**. No webfonts are loaded — this is deliberate, for performance and for trustworthy native rendering.

```
ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
"Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
```

### Scale

| Token | Size | Weight | Usage |
| --- | --- | --- | --- |
| `{typography.display}` | 60px (clamps down from 72→36 across breakpoints) | 700 | Hero `<h1>` only. |
| `{typography.headline-lg}` | 48px | 700 | Section `<h2>` (e.g. "Our Core Services"). |
| `{typography.headline-md}` | 36px | 700 | Sub-page heroes, large CTA section headings. |
| `{typography.headline-sm}` | 24px | 700 | Card titles (`<h3>`), footer column headings. |
| `{typography.body-lg}` | 20px | 400 | Hero supporting paragraph. |
| `{typography.body-md}` | 16px | 400 | Default body. |
| `{typography.body-sm}` | 14px | 400 | Footer body, captions, helper text. |
| `{typography.label-md}` | 16px | 600 | Buttons, inline links, nav items. |
| `{typography.label-sm}` | 14px | 600 | Nav links, small buttons, badge text. |
| `{typography.eyebrow}` | 14px | 600 | UPPERCASE label above section headings. Always coloured `{colors.primary}` and tracked at 0.1em. |

### Treatments

- **Gradient headline accent.** The hero `<h1>` second line uses a `from-white to-gray-200` text gradient (`bg-clip-text text-transparent`). This treatment is reserved for the homepage hero. Don't apply it elsewhere.
- **Eyebrow + headline pairing.** Section headings always pair: an `{typography.eyebrow}` label in `{colors.primary}` directly above an `{typography.headline-lg}` heading in `{colors.on-surface}`. Use the `<x-section-heading>` Blade component.
- **Line-height.** Body copy uses `1.6` (`leading-relaxed`) to support scannability for long-form service descriptions.

## Layout

### Container

- Max content width: **1280px** (`max-w-7xl`).
- Horizontal padding scale: 16 / 24 / 32px (`px-4 sm:px-6 lg:px-8`).
- All marketing pages use the same container; do not introduce wider full-bleed content except for backgrounds (gradients, decorative shapes).

### Vertical rhythm

Section padding is responsive and consistent:

```
py-10 sm:py-14 md:py-16 lg:py-20
```

This translates to roughly 40 → 56 → 64 → 80px vertical padding per breakpoint. Keep it. The site's calm pacing depends on it.

### Section alternation

Sections alternate between three surface treatments:

1. `{colors.surface}` — default white background.
2. `{colors.surface-muted}` via `bg-gradient-to-br from-gray-50 via-white to-gray-50` — adds barely-perceptible variation.
3. `{gradients.brand-hero}` — for the hero and the bottom CTA section. Always white text.

Never place two `{colors.surface}` sections back-to-back without a heading or visual break.

### Grid patterns

- **4-column service grid** at `lg`: `grid md:grid-cols-2 lg:grid-cols-4 gap-8`.
- **3-column "approach" grid** at `lg`: `grid md:grid-cols-2 lg:grid-cols-3 gap-8`.
- **Hero**: 2-column at `lg` (`lg:grid-cols-2 lg:gap-12 items-center`); content occupies the left, right reserved for an optional illustration (currently empty).
- **Footer**: 3-column at `md` (`md:grid-cols-3 gap-12`).

### Section dividers

The hero ends with an SVG **wave divider** that fades into the next section's white surface. This is a deliberate motif and the only large decorative SVG used in the layout. Do not add diagonal skews or extra wave dividers elsewhere — one decorative transition keeps the design uncluttered.

## Elevation & Depth

Depth is signalled by elevation, not by colour intensity. Cards float on white; no card uses a fill darker than `{colors.surface-muted}`.

| Token | Use |
| --- | --- |
| `{elevation.sm}` | Header (sticky nav). |
| `{elevation.md}` | About-page secondary cards. |
| `{elevation.lg}` | Default card resting state (service cards, "approach" tiles). |
| `{elevation.xl}` | Hero CTA buttons; footer "Contact Us" button; large feature blocks. |
| `{elevation.2xl}` | Hover state for service cards; the white CTA button on dark backgrounds. |

### Decorative blur orbs

Hero and footer include a **subtle blurred circle** (`bg-white opacity-5 rounded-full blur-xl`) positioned off-axis to add atmospheric depth without adding contrast. Limit to one or two per section. They must always be `aria-hidden="true"`.

### Glow under icon tiles

Service-card icons sit on a gradient tile with an offset duplicate gradient (`-inset-1 ... blur-sm opacity-20`) that intensifies on hover (`opacity-40`). This is the brand's signature micro-effect — keep it on the icon tiles only.

## Shapes

The brand is **rounded, not sharp**.

| Token | Use |
| --- | --- |
| `{rounded.sm}` (6px) | Form-error tags, inline pills inside cards. |
| `{rounded.md}` (8px) | Form inputs, nav-CTA button, dropdown menus. |
| `{rounded.lg}` (12px) | Primary CTA buttons in hero and footer. |
| `{rounded.xl}` (16px) | Large CTA buttons in dedicated CTA sections; icon tiles inside cards. |
| `{rounded.2xl}` (24px) | Service cards; "approach" icon tiles; large feature blocks. |
| `{rounded.full}` | Pill badges; trust-indicator dots; circular icon backgrounds on the About page. |

Never mix `{rounded.none}` (0px) into the same view as the rest of the system. Sharp edges read as foreign.

### Decorative corner triangle

Service cards include a tiny decorative triangle in the top-right corner (`opacity-5` resting, `opacity-10` on hover) tinted in the card's accent blue. This is purely atmospheric — it must remain invisible-by-default and never carry information.

## Components

### Button — Primary (on light surface)

`{components.button-primary}`. Gradient `{gradients.brand-horizontal}`, white text, `{rounded.lg}` corners, `{elevation.xl}`. On hover: `-translate-y-1` lift and gradient shifts to `{colors.primary-mid}` → `{colors.primary-dark}`. Includes a right-arrow SVG that translates `+8px` on hover. Use the `<x-button.gradient>` Blade component.

### Button — Primary (on dark/gradient surface)

`{components.button-primary-on-dark}`. White fill, `{colors.primary}` text, `{rounded.lg}`, `{elevation.xl}`. Includes a hover **shimmer**: a skewed white-translucent overlay slides across the button on hover. Reserve shimmer for the bottom-of-page CTA button only.

### Button — Secondary (on dark surface)

`{components.button-secondary-on-dark}`. Glass effect: `rgba(255,255,255,0.10)` fill, `backdrop-blur`, white border at 30% opacity. Hover deepens fill to `rgba(255,255,255,0.20)`. No lift, no shimmer.

### Button — Nav CTA

`{components.button-nav-cta}`. Solid `{colors.primary}` fill, white text, `{rounded.md}`, no shadow, `active:scale-95`. Hover darkens to `{colors.primary-dark}`. Smaller than marketing CTAs.

### Card — Service

`{components.card-service}`. White surface, `{rounded.2xl}`, `{elevation.lg}`, **left border accent** of 4px in `{colors.primary}` or `{colors.primary-dark}` (alternating across the row). On hover: lifts `-translate-y-2`, elevation rises to `{elevation.2xl}`, border accent swaps to the alternate blue, the icon tile scales `+10%`, and the heading shifts to `{colors.primary}`.

Card content order is fixed: gradient icon tile → `<h3>` → body paragraph → "Learn more" inline link with animated arrow.

### Card — About / Mission tile

Lighter variant. White surface, `{rounded.lg}`, `{elevation.md}`. Centred icon in a 64px solid-blue circle (`{rounded.full}`) on top, then heading, then body. Used in mission-style grids; do not mix with service cards on the same page.

### Badge — Pill

`{components.badge-pill}`. Used in the hero to anchor the page with a status-style label ("UK-Based IT Consultancy"). Includes a 2px green pulsing dot in `{colors.accent-success}`. The dot is the only animated brand-coloured element on the page that runs continuously — `prefers-reduced-motion` must disable the pulse.

### Trust indicator

`{components.trust-indicator}`. Inline checkmark + label. Checkmark is `{colors.accent-success}` (`green-400` on dark backgrounds for contrast). Used in the hero trust strip and the footer company column. Use `<x-trust-indicator>`.

### Section heading

Eyebrow + heading + optional supporting paragraph, centred by default. Use `<x-section-heading>` with `eyebrow` slot. Defaults to `text-center mb-16`. Left-align variant exists but is not currently in use — keep new pages centred unless there's a clear reason.

### Form — Input

`{components.input-text}`. White fill, 1px `{colors.border-strong}` border, `{rounded.md}`, 12px×16px padding. Focus state: `{colors.primary}` border + `focus:ring-2` ring at 50% primary opacity. Error state swaps border to `{colors.error}`. Always pair with a visible `<label>` — placeholder text alone is not a label. Used on the get-started and careers pages.

### Footer

Three-column dark surface (`{gradients.footer}`). Each column heading uses a small gradient accent bar (`w-8 h-0.5 bg-gradient-to-r from-[#198fd9] to-transparent mr-3`) to the left of the title — this is the footer's signature treatment. Quick-links use a slide-in micro-arrow on hover. Do not replicate the slide-in-arrow link style outside the footer.

### Header / Navigation

White surface, sticky-top, `{elevation.sm}`. Logo lockup is icon + wordmark, both linking home. Active nav item carries a 2px bottom border in `{colors.primary}`. Mobile menu is an Alpine-powered disclosure panel — not a full-screen overlay.

## Do's and Don'ts

### Do

- **Do** use `{colors.primary}` for every interactive accent (links, focus rings, eyebrows, primary CTA gradient, active nav).
- **Do** lean on gradients from the blue family for visual interest — `{gradients.brand-horizontal}`, `{gradients.brand-hero}`, `{gradients.footer}`.
- **Do** keep cards on white. Lift them with elevation, not background colour.
- **Do** use the `<x-button.gradient>`, `<x-section-heading>`, `<x-trust-indicator>`, `<x-icon.check>`, and `<x-icon.arrow>` Blade components instead of inlining the markup. Drift starts when components are bypassed.
- **Do** include a hover lift (`-translate-y-1` for buttons, `-translate-y-2` for cards) and an animated arrow on inline "Learn more" links.
- **Do** maintain `py-10 sm:py-14 md:py-16 lg:py-20` section padding. The site's calm reads through that rhythm.
- **Do** keep one decorative wave divider (between the hero and the next section). One.
- **Do** ensure every interactive target is at least 24×24 CSS pixels (WCAG 2.2 SC 2.5.8).
- **Do** verify `prefers-reduced-motion` disables hover lifts, the pulsing badge dot, and the shimmer effect. The CSS already does this globally — don't add inline animations that bypass it.

### Don't

- **Don't** introduce a second accent colour. The previously-used pink (`#D65FCB`) failed AA contrast and has been removed; do not reintroduce pink, magenta, purple, orange, or yellow under any framing ("just one button," "for variety," etc.).
- **Don't** put `{colors.primary}` text directly on `{colors.surface-muted}` for body copy — use it for links, headings ≥ 18px semibold, and UI components only.
- **Don't** use `{colors.accent-success}` decoratively. It signals success or trust. A green icon with no semantic meaning is wrong.
- **Don't** add drop shadows to surfaces inside cards. Cards have one elevation; nesting elevations creates noise.
- **Don't** mix `{rounded.none}` (sharp corners) into the marketing surface. The brand is rounded.
- **Don't** apply the gradient text treatment outside the homepage hero `<h1>`.
- **Don't** apply the shimmer effect outside the bottom-of-page CTA button.
- **Don't** add a second wave divider, diagonal skew, or large decorative SVG. One transition motif, used once.
- **Don't** use the `env()` helper for brand values in Blade — pull from `config('brand.*')` so this DESIGN.md and the runtime stay aligned.
- **Don't** introduce custom webfonts. The system stack is intentional for performance and platform-native trust.
- **Don't** ship a colour change without re-checking contrast. AA is the floor.

### Source of truth

When in doubt, this DESIGN.md is the source of truth. The runtime values are kept in sync at:

- `resources/css/app.css` — `--color-primary: #198fd9` (focus rings, skip-link, base accessibility styles).
- `config/brand.php` — `colors.primary` and `colors.accent` mirror this document.
- `resources/views/**/*.blade.php` — inline hex codes (`#198fd9`, `#1a7fc7`, `#0f6ba8`) and Tailwind utilities (`green-400` for the success accent).

If a future change adds a new colour, update **all three** locations in the same commit so they don't drift.
