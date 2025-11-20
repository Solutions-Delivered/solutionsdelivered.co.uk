# Visual Design Review: Solutions Delivered Website

**Reviewer:** Jordan Matthews, Visual Designer
**Date:** November 20, 2025
**Review Focus:** Typography, Color, Imagery, Layout, Brand Consistency

---

## Executive Summary

I've conducted a comprehensive visual design review of the Solutions Delivered website, examining typography, color usage, imagery, layout composition, and brand consistency across all pages. As a visual designer, I'm evaluating how effectively the design creates visual hierarchy, maintains brand identity, and delivers an emotionally resonant experience.

Overall, the website demonstrates a **solid technical foundation with WCAG-compliant colors and consistent component usage**, but it suffers from **significant visual design issues** including over-reliance on effects, lack of authentic imagery, generic aesthetic choices, and missed opportunities for distinctive brand personality. The design feels more like a technical implementation than a thoughtfully crafted visual experience.

**Overall Rating: 6.5/10**

The website is competent but uninspired. It delivers accessibility and functionality but lacks the visual sophistication and emotional resonance that would elevate it to excellence.

---

## Strengths

### 1. **Consistent Color Application**
The color palette is applied systematically throughout the site. The primary blue (#198fd9) and supporting shades (#1a7fc7, #0f6ba8) create a cohesive visual thread. The WCAG 2.2 compliant color choices ensure readability while maintaining brand identity.

**Files:**
- `/resources/css/app.css` (lines 11-17)
- Consistent usage across all view files

### 2. **Clear Typography Hierarchy**
The typographic scale is well-defined with large, bold headings (text-5xl to text-7xl) creating strong focal points. The hierarchy is consistent:
- Hero headings: 5xl-7xl
- Section headings: 3xl-5xl
- Body text: base-xl
- Labels/small text: sm

**Examples:**
- `/resources/views/home.blade.php` (line 29-34)
- `/resources/views/about.blade.php` (line 25-30)

### 3. **Generous White Space**
The layouts breathe well with appropriate padding and margins. The max-w-7xl container pattern creates consistent boundaries, and section spacing (py-16, py-20) provides comfortable visual rhythm.

### 4. **Component Consistency**
Reusable components maintain visual consistency:
- Section headings with eyebrow text
- Trust indicators
- Gradient buttons
- Card patterns

**Files:**
- `/resources/views/components/section-heading.blade.php`
- `/resources/views/components/trust-indicator.blade.php`
- `/resources/views/components/button/gradient.blade.php`

### 5. **Thoughtful Hover States**
Interactive elements have polished hover effects with transform translations, shadow increases, and smooth transitions. These micro-interactions add polish.

---

## Weaknesses

### 1. **Over-Reliance on Gradients and Effects**

**The biggest visual design problem is the excessive use of gradients, blurred decorative elements, and effects throughout the site.** While gradients can add visual interest, the current implementation feels heavy-handed and dated:

- **Background gradients on every header section** (bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8])
- **Excessive decorative blurred circles** (`w-96 h-96 bg-white opacity-10 rounded-full blur-3xl`)
- **Multiple overlapping blur effects** creating visual noise
- **Gradient buttons everywhere** instead of using solid colors for variety

**Impact:** This makes the design feel generic, "template-like," and visually overwhelming. Modern design trends favor cleaner, more minimal approaches. The blur effects add no meaningful visual information—they're just decorative clutter.

**Files Affected:**
- `/resources/views/home.blade.php` (lines 10-17, 64-68, 324-326)
- `/resources/views/about.blade.php` (lines 10-14, 139-143)
- `/resources/views/solutions.blade.php` (lines 74-78, 326-328)
- `/resources/views/get-started.blade.php` (lines 27-31, 224-227)
- `/resources/views/partials/footer.blade.php` (lines 4-8)

**Specific Issues:**
```blade
<!-- This pattern repeats on EVERY page header -->
<div class="absolute top-10 right-20 w-72 h-72 bg-white opacity-10 rounded-full blur-3xl"></div>
<div class="absolute bottom-10 left-10 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>
```

This decorative approach adds no value—it's visual noise disguised as sophistication.

### 2. **Complete Absence of Photography/Authentic Imagery**

The website has **zero photographic content or authentic imagery**—only icons, logos, and decorative SVG elements. This is a critical weakness because:

- **No human element:** No team photos, client photos, or authentic workplace imagery
- **No visual storytelling:** Can't see the people, processes, or outcomes
- **Generic feel:** Relies entirely on stock SVG icons that any competitor could use
- **Missed emotional connection:** Photography builds trust and authenticity

**What's Missing:**
- Team member photos (About page)
- Client/project case study imagery (Solutions page)
- Process/workflow photography (How We Work page)
- Office/culture photos (Careers page)

**Files Lacking Imagery:**
- `/resources/views/about.blade.php` - No team photos
- `/resources/views/solutions.blade.php` - No project/work examples
- `/resources/views/careers.blade.php` - No culture/team photos
- `/resources/views/how-we-work.blade.php` - No process visualization

### 3. **Generic SVG Icon Usage**

The website uses **generic Heroicons throughout** with no custom illustration or icon style. Every icon is a standard stroke-based SVG that thousands of other websites use.

**Issues:**
- No custom icon style or modification
- No illustration to add personality
- No unique visual language
- Icons feel like placeholders

**Examples:**
```blade
<!-- Generic code icon used everywhere -->
<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
</svg>
```

**Files:**
- `/resources/views/home.blade.php` (lines 84-86, 118-120, 149-151, 180-182)
- Service card icons throughout

### 4. **Monotonous Card Design Pattern**

The same rounded card with shadow pattern is used **everywhere** without variation:

```blade
<article class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-[#198fd9]">
```

**Issues:**
- Every service card looks identical (home, solutions pages)
- Every value proposition card looks identical
- No visual variety in card treatments
- Predictable, template-like feel

**Files:**
- `/resources/views/home.blade.php` (lines 81-113, 116-144, 147-175, 178-206)
- `/resources/views/about.blade.php` (lines 59-86)

### 5. **Weak Font Choice**

The typography uses **system font stack** rather than a distinctive typeface:

```css
--font-sans: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
```

**Issues:**
- No distinctive brand personality in typography
- Relies on whatever font the user's system provides
- Inconsistent rendering across platforms
- Missed opportunity for visual differentiation
- No custom font pairing strategy

**File:** `/resources/css/app.css` (line 9)

**Impact:** The typography is safe but forgettable. No character, no personality, no memorability. Compare to competitors who use distinctive typefaces that reinforce brand identity.

### 6. **Limited Color Palette Usage**

While the color palette is **technically consistent**, it's **extremely limited and monochromatic**:

**Available Colors:**
- Blue: #198bd9, #1a7fc7, #0f6ba8
- Green: #65bd7d (defined but rarely used)
- Gray scale

**Issues:**
- The green accent color (#65bd7d) is defined but barely utilized
- No secondary color variance for different page sections or content types
- Every call-to-action uses the same blue gradient
- No visual diversity between page sections

**File:** `/resources/css/app.css` (lines 11-17)

### 7. **Inconsistent Visual Weight and Balance**

Some sections feel **visually heavy while others feel empty**:

**Heavy sections:**
- Hero sections with gradients + blur effects + decorative SVG waves = visual overload
- Footer with gradients + blur effects + multiple accent lines

**Light sections:**
- About page value proposition cards lack visual interest
- Solutions page alternating sections feel sparse

**Files:**
- `/resources/views/home.blade.php` (lines 8-69) - Heavy hero
- `/resources/views/about.blade.php` (lines 58-87) - Light cards

### 8. **Overuse of Corner Decorative Elements**

The decorative corner triangles appear in almost every card:

```blade
<div class="absolute top-0 right-0 w-20 h-20 opacity-5 group-hover:opacity-10 transition-opacity" aria-hidden="true">
    <svg viewBox="0 0 100 100">
        <path d="M0,0 L100,0 L100,100 Z" fill="currentColor" class="text-[#198fd9]"/>
    </svg>
</div>
```

**Issues:**
- Repetitive visual pattern loses impact
- Adds no meaningful information
- Creates visual clutter
- Another "template-like" indicator

**Files:**
- `/resources/views/home.blade.php` (lines 108-112, 139-143, 170-174, 201-205)

---

## Specific Issues (with File Paths)

### Typography Issues

#### 1. **No Web Font Implementation**
**File:** `/resources/css/app.css`
**Line:** 9
**Issue:** Using system fonts instead of web fonts means no distinctive typography
**Recommendation:** Consider Google Fonts (Inter, Plus Jakarta Sans) or Adobe Fonts for more character

#### 2. **Inconsistent Line Heights**
**Files:** Various view files
**Issue:** Some paragraphs use `leading-relaxed`, others use `leading-tight`, no clear pattern
**Recommendation:** Establish consistent line-height scale (1.5 for body, 1.2 for headings)

### Color Issues

#### 3. **Unused Secondary Color**
**File:** `/resources/css/app.css`
**Line:** 13
**Issue:** Green secondary color (#65bd7d) defined but only used in tiny trust indicators
**Recommendation:** Use green for success states, secondary CTAs, or specific service categories

#### 4. **No Dark Mode Consideration**
**Files:** All view files
**Issue:** No dark mode color variants despite Tailwind 4 supporting dark mode
**Recommendation:** Add `dark:` variants for brand evolution

### Layout Issues

#### 5. **Repetitive Hero Structure**
**Files:**
- `/resources/views/home.blade.php` (lines 8-69)
- `/resources/views/about.blade.php` (lines 8-36)
- `/resources/views/solutions.blade.php` (lines 72-100)
- `/resources/views/get-started.blade.php` (lines 25-60)

**Issue:** Every page uses identical hero structure (gradient bg + blur effects + breadcrumb badge + large heading)
**Recommendation:** Differentiate hero treatments per page type

#### 6. **Fixed Container Width**
**Files:** All layout files use `max-w-7xl`
**Issue:** No variation in container widths creates monotony
**Recommendation:** Use `max-w-6xl` for focused content, `max-w-8xl` for showcase sections

### Imagery Issues

#### 7. **No Visual Assets Directory**
**Files:** `/public/` directory
**Issue:** Only logos and favicons exist—no content imagery, no photography, no illustrations
**Recommendation:** Add `/public/images/` directory with team photos, client work examples, process visuals

#### 8. **Generic OG Image**
**File:** `/public/og-image.png`
**Issue:** Likely generic or text-only (couldn't inspect image content)
**Recommendation:** Design compelling social share graphics with brand imagery

### Component Issues

#### 9. **Section Heading Component Lacks Flexibility**
**File:** `/resources/views/components/section-heading.blade.php`
**Lines:** 1-14
**Issue:** Limited customization options (only eyebrow, align, id)
**Recommendation:** Add size variants, style options, decorative element toggles

#### 10. **Button Gradient Component Has No Alternatives**
**File:** `/resources/views/components/button/gradient.blade.php`
**Lines:** 1-28
**Issue:** Only gradient button style available—no solid, outline, or ghost variants
**Recommendation:** Create button system with multiple style variants

### Brand Consistency Issues

#### 11. **Logo Treatment Inconsistency**
**Files:**
- `/resources/views/partials/header.blade.php` (line 15) - Company name displayed as text
- `/resources/views/partials/footer.blade.php` (line 19) - Company name displayed as text

**Issue:** Logo always paired with text, no standalone logo mark usage
**Recommendation:** Consider scenarios where logo mark alone works (mobile, favicon, etc.)

#### 12. **CTA Button Styling Variations**
**Files:** Various view files
**Issue:** While consistent in structure, CTAs use slightly different combinations of classes
**Examples:**
- `bg-white text-[#198fd9]` (primary CTA on gradient backgrounds)
- `bg-gradient-to-r from-[#198fd9] to-[#1a7fc7]` (primary CTA on light backgrounds)
- `bg-white/10 backdrop-blur-sm` (secondary CTA)

**Recommendation:** Document CTA hierarchy and usage patterns in style guide

---

## Recommendations

### High Priority (Critical Impact)

#### 1. **Reduce Gradient and Blur Effects by 70%**
**Impact:** Visual cleanliness, modern aesthetic, reduced visual noise
**Action Items:**
- Remove decorative blur circles from all page headers
- Use solid color backgrounds with subtle texture instead of heavy gradients
- Reserve gradients for specific emphasis moments only (main hero CTA)
- Remove diagonal skew overlays (`transform -skew-y-6`)

**Files to Update:**
- All page header sections
- Footer
- CTA sections

#### 2. **Invest in Professional Photography**
**Impact:** Authenticity, trust, emotional connection, differentiation
**Action Items:**
- Commission team photography session
- Capture authentic workspace/process photos
- Document client projects (with permission)
- Create lifestyle imagery for brand storytelling

**Pages Needing Imagery:**
- About: Team section with member photos
- Solutions: Case study imagery showing work
- Careers: Office/culture photos
- How We Work: Process visualization

#### 3. **Implement Web Font System**
**Impact:** Brand personality, visual distinction, professional polish
**Action Items:**
- Select distinctive font pairing (e.g., Plus Jakarta Sans + Inter)
- Implement @font-face or Google Fonts
- Create typographic scale documentation
- Update CSS theme variables

**File to Update:** `/resources/css/app.css`

#### 4. **Diversify Card Treatments**
**Impact:** Visual interest, reduced monotony, better information hierarchy
**Action Items:**
- Create 3-4 distinct card styles for different content types
- Use solid backgrounds, outlined cards, elevated cards, flat cards strategically
- Remove repetitive corner decorations
- Vary card spacing and grouping patterns

**Files to Update:** All view files with service/value proposition cards

### Medium Priority (Significant Impact)

#### 5. **Expand Color Palette Usage**
**Impact:** Visual variety, better content categorization
**Action Items:**
- Use green (#65bd7d) for success states, secondary services
- Add warm accent color (orange/coral) for career/culture sections
- Create color-coded service categories
- Define color usage guidelines

**Files to Update:**
- Theme configuration
- Service cards
- Trust indicators

#### 6. **Create Custom Icon System**
**Impact:** Brand uniqueness, visual differentiation
**Action Items:**
- Develop custom icon style (line weight, rounded corners, style)
- Create service-specific icon illustrations
- Add subtle animations to icons
- Document icon usage patterns

**Consideration:** Budget for designer/illustrator time

#### 7. **Add Subtle Texture and Depth**
**Impact:** Visual richness without heaviness
**Action Items:**
- Add subtle noise/grain texture to backgrounds
- Use micro-shadows for depth instead of blur effects
- Implement subtle patterns in hero sections
- Add organic shapes instead of circles

#### 8. **Improve Hero Section Variety**
**Impact:** Page distinction, visual interest
**Action Items:**
- Create 2-3 hero layouts (image-focused, centered text, split screen)
- Vary hero heights based on content importance
- Use different background treatments per page type
- Add imagery to hero sections

**Files to Update:** All page hero sections

### Low Priority (Polish)

#### 9. **Refine Micro-Interactions**
**Impact:** Delight, professional polish
**Action Items:**
- Add smooth page transitions
- Enhance link underline animations
- Create more sophisticated button hover states
- Add subtle scroll-triggered animations

#### 10. **Create Visual Style Guide**
**Impact:** Design consistency, easier maintenance
**Action Items:**
- Document typography scale and usage
- Create color palette guide with usage examples
- Define spacing system
- Show component variations
- Include do's and don'ts

#### 11. **Add Testimonial/Social Proof Imagery**
**Impact:** Trust, credibility
**Action Items:**
- Client logo wall on homepage
- Testimonial cards with client photos
- Before/after or case study visuals
- Certification/accreditation badges

#### 12. **Optimize Logo Usage**
**Impact:** Brand flexibility
**Action Items:**
- Create logo mark (icon only) for compact contexts
- Document logo spacing and sizing rules
- Add logo variations (white, single color, etc.)
- Ensure logo scales appropriately

---

## Checklist Results

Based on Jordan Matthews' evaluation criteria:

- [x] **Is the typography hierarchy clear and beautiful?** - Mostly yes, but font choice is weak
- [x] **Is there a cohesive color palette applied consistently?** - Yes, but underutilized
- [ ] **Are images high-quality and on-brand?** - No images exist beyond logos/icons
- [x] **Is there generous white space and breathing room?** - Yes
- [~] **Is the layout balanced and compositionally sound?** - Technically yes, but repetitive
- [~] **Are icons consistent in style and weight?** - Consistent but generic
- [~] **Does the design reflect the brand personality?** - Generic professional, lacks distinctive personality
- [x] **Are visual details polished (alignment, spacing)?** - Yes
- [x] **Is the design responsive without compromising aesthetics?** - Appears to be (responsive classes used)
- [ ] **Does it create the intended emotional response?** - Lacks emotional resonance due to no imagery

**Score: 5.5/10 checklist items fully satisfied**

---

## Overall Rating: 6.5/10

### Rating Breakdown:
- **Typography:** 6/10 - Good hierarchy, weak font choice
- **Color Palette:** 7/10 - Consistent but limited, overuses gradients
- **Imagery:** 2/10 - Critical weakness, no photography
- **Layout:** 7/10 - Clean and spacious but repetitive
- **Brand Consistency:** 7/10 - Consistent but generic
- **Visual Details:** 8/10 - Well-executed technical polish
- **Emotional Impact:** 4/10 - Lacks authenticity and personality

### Why Not Higher?

The website demonstrates **technical competence and accessibility-first thinking**, which is commendable. However, as a visual designer, I can't rate it higher because:

1. **It lacks a distinctive visual identity** - could be any B2B consultancy
2. **Over-reliance on template-like effects** undermines sophistication
3. **Complete absence of photography** eliminates emotional connection
4. **Generic icon and component usage** shows no custom design thinking
5. **Monotonous visual patterns** create predictability rather than delight

### Why Not Lower?

The website avoids major visual design failures:

1. **Color contrast is excellent** (WCAG compliant)
2. **Spacing and alignment are consistent**
3. **Typography hierarchy works**
4. **No egregious style clashes or jarring elements**
5. **Clean, professional baseline**

### The Core Issue:

This website was **designed by developers for developers**, focusing on technical excellence (accessibility, performance, clean code) while neglecting **visual design excellence** (distinctive aesthetics, emotional resonance, brand personality).

It's a **technically beautiful implementation of a visually generic design**.

---

## Final Thoughts

From my perspective as a visual designer, this website frustrates me because **the foundation is so solid**. The code is clean, the accessibility is exemplary, the structure is sound. But it's missing the soul that makes visual design meaningful.

The biggest opportunity is **humanizing the design through authentic photography and reducing the reliance on decorative effects**. Instead of blur effects and gradients trying to add visual interest, let real imagery of real people doing real work tell the story.

The second biggest opportunity is **establishing a distinctive visual language** through custom typography, a refined color strategy, and unique iconography or illustration style.

**This website is currently a 6.5. With photography and visual refinement, it could easily be an 8.5-9.0.**

The bones are excellent. It needs a soul.

---

**Reviewed by:** Jordan Matthews
**Contact:** Available for design consultation and brand development
**Review Date:** November 20, 2025
