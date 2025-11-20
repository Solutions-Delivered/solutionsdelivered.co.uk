# Inclusive Design Review: Solutions Delivered Website
**Reviewer:** Aisha Patel, Inclusive Design Lead
**Date:** November 20, 2025
**Review Focus:** Cognitive load, plain language, neurodivergent user support, and diverse user needs

---

## 1. Executive Summary

I've completed a comprehensive inclusive design review of the Solutions Delivered website from the perspective of cognitive diversity, neurodivergent users, and broader inclusive design principles. While the site demonstrates a commendable foundation in technical accessibility compliance (WCAG 2.2), there are significant opportunities to enhance the experience for users with cognitive disabilities, low literacy levels, and neurodivergent conditions.

**Overall Rating: 6.5/10**

The website succeeds in its technical accessibility implementation but falls short in addressing the full spectrum of inclusive design considerations. The experience is optimized for neurotypical users with strong literacy skills and high cognitive capacity, potentially creating barriers for a significant portion of the user population.

---

## 2. Strengths

### 2.1 Strong Technical Accessibility Foundation

The website demonstrates excellent understanding of technical accessibility requirements:

- **Color contrast compliance**: The custom color palette (`--color-primary: #198bd9`) meets WCAG AA contrast requirements with documented ratios
- **Focus indicators**: Clear, consistent focus states with 3px solid outline and 2px offset
- **Skip navigation**: Properly implemented skip-to-content link for keyboard users
- **Semantic HTML**: Appropriate use of landmarks (`<header>`, `<nav>`, `<main>`, `<footer>`) with ARIA labels
- **Form accessibility**: Labels properly associated with inputs, error messages with `role="alert"`, and descriptive help text

### 2.2 Reduced Motion Support

The CSS includes proper `prefers-reduced-motion` media query that respects user preferences:

```css
@media (prefers-reduced-motion: reduce) {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
}
```

This is excellent for users with vestibular disorders or those who find motion distracting.

### 2.3 Consistent Layout and Predictable Navigation

The navigation structure is consistent across all pages:
- Sticky header that remains accessible
- Same menu items in the same order throughout
- Clear visual indication of current page (underline border)
- Mobile menu with clear open/close states

This predictability significantly reduces cognitive load and helps users build mental models of the site.

### 2.4 Clear Visual Hierarchy

The use of heading levels is generally appropriate:
- H1 for page titles
- H2 for major sections (with IDs for linking)
- H3 for subsections
- Proper use of `aria-labelledby` to connect sections with headings

### 2.5 Helpful Form Design

The contact form shows strong accessibility awareness:
- Required fields clearly marked with asterisk and `aria-label`
- Help text provided (e.g., "We'll never share your email")
- Character limits stated ("Maximum 2000 characters")
- Error messages specific and actionable
- Success messages with proper ARIA live regions

---

## 3. Weaknesses

### 3.1 Language Complexity and Jargon

**Critical Issue**: The content frequently uses business jargon and complex terminology without explanation:

- "ITIL-aligned service management frameworks"
- "Bespoke Laravel-based web systems"
- "Organizational transformation"
- "Business change management support"
- "Service management consulting"
- "Process optimization"
- "WCAG 2.2 compliant"

**Impact**: Users with:
- Low literacy levels
- English as a second language
- Cognitive processing difficulties
- Learning disabilities

...will struggle to understand what services are actually being offered.

**Recommendation**: No reading level assessment appears to have been conducted. The Flesch-Kincaid reading level is likely 12th grade or higher, excluding users who read at lower levels.

### 3.2 Visual Overwhelm and Cognitive Load

**Multiple Issues Identified**:

1. **Decorative Complexity**: Every major section includes multiple decorative blur effects and gradient backgrounds:
   ```html
   <div class="absolute top-20 right-20 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
   <div class="absolute bottom-10 left-10 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
   ```

   While these may be aesthetic, they create visual noise that can be distracting for users with ADHD or autism.

2. **Information Density**: Pages like the homepage contain:
   - Hero section with multiple CTAs
   - 4 service cards with icons, descriptions, and links
   - Trust indicators
   - Statistics section
   - Multiple process steps
   - Testimonials
   - Another CTA section

   This is overwhelming presented as a single, long scroll without clear chunking or pacing.

3. **Competing Visual Elements**: Multiple gradient backgrounds, animated icons, hover effects, and decorative elements compete for attention simultaneously.

4. **Lack of White Space**: While there is spacing, the density of content and decorative elements reduces the breathing room needed for cognitive processing.

**Impact**: Users with ADHD, autism, anxiety, or cognitive fatigue will find it difficult to:
- Focus on primary content
- Determine what's important
- Process information sequentially
- Avoid distraction from decorative elements

### 3.3 No Customization Options

**Critical Gap**: The website offers no way for users to customize their experience:

- No font size controls (beyond browser defaults)
- No line spacing adjustment
- No color scheme options
- No way to reduce decorative elements
- No "simple view" or "focus mode"

**Impact**: Users cannot adapt the interface to their specific needs, a core principle of inclusive design.

### 3.4 Complex Gradients May Impact Readability

The extensive use of gradient backgrounds, particularly on white text, may create readability issues:

```html
<section class="relative overflow-hidden bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white">
```

While the text color itself (white) has good contrast, the varying background tones may create subtle readability fluctuations across the gradient, particularly challenging for users with dyslexia or visual processing difficulties.

### 3.5 No Clear Page Length or Progress Indicators

Long pages lack:
- Table of contents
- Progress indicators
- "Back to top" functionality
- Visual indication of page length
- Section previews

**Impact**: Users can't assess how much content remains, making it difficult to pace reading or decide whether to continue.

### 3.6 Assumption of Technical Understanding

The site assumes users understand:
- What Laravel is and why it matters
- What WCAG compliance means
- What "bespoke" implies
- What "service management" encompasses
- Technical terminology around web development

These assumptions exclude users without IT backgrounds.

### 3.7 Limited Content Format Diversity

**Observation**: Content is primarily text-based. There are:
- No video explanations
- No audio alternatives
- No infographics or diagrams
- No icon-based navigation options
- Limited imagery that explains concepts

**Impact**: Users who process information better through visual, audio, or multimedia formats have fewer options.

### 3.8 Form Complexity

The contact form, while technically accessible, presents all fields at once:
- 3-4 fields plus a large textarea
- All on one page without steps or sections
- No option to save and return later
- No clear indication of time required

**Impact**: Users with cognitive fatigue or executive function challenges may abandon the form due to perceived complexity.

### 3.9 Trust Indicators May Create Confusion

Multiple trust indicators appear throughout:
- "WCAG 2.2 Compliant"
- "Direct Team Collaboration"
- "No-Bloat Philosophy"
- "UK-Based IT Consultancy"
- "24 hour response time"
- "Free initial consultation"
- "No obligation proposal"

**Issue**: While meant to build confidence, this creates visual clutter and may overwhelm users trying to understand the core value proposition.

### 3.10 Inconsistent Use of Plain Language

Some sections use clear, simple language:
> "We work directly with your teams"

Others use complex constructions:
> "Customised internal process optimisation working directly with client teams to enhance efficiency and effectiveness"

This inconsistency means users can't develop a reliable mental model of the communication style.

---

## 4. Specific Issues

### 4.1 Hero Section (Homepage)

**Issues**:
- Two competing CTAs ("Get Started" and "View Our Solutions") without clear guidance on which to choose
- Complex headline with gradient text effect: "Delivering Solutions is in Our DNA"
- Multiple animated elements (pulsing dot, hover effects)
- Dense tagline: "Tailored IT solutions for service management, web development, and business transformation"

**Recommended Reading Level**: Grade 12+
**Actual Need**: Grade 6-8 for inclusive reach

### 4.2 Services Section

**Issues**:
- Four service cards presented simultaneously without prioritization
- Each card contains:
  - Animated gradient icon
  - Decorative glow effect
  - Title
  - Description (2-3 lines)
  - "Learn more" link
  - Decorative corner element
  - Hover animations

**Cognitive Load**: HIGH - users must process 4 complex cards simultaneously

**Recommendation**: Present services sequentially or allow filtering/selection.

### 4.3 Process Sections

Multiple pages show numbered process steps (3-4 steps typical). While this is good for understanding, the execution has issues:

**Current Implementation**:
```html
<div class="grid md:grid-cols-3 gap-8">
    <!-- Step 1, 2, 3 all shown at once -->
</div>
```

**Issue**: All steps shown simultaneously. Users with working memory limitations may struggle to hold multiple steps in mind.

**Better Approach**: Interactive stepper that reveals one step at a time, or accordion-style progressive disclosure.

### 4.4 Footer

The footer includes:
- Company description
- Trust indicator
- 6 navigation links (Quick Links)
- Contact CTA with animated button
- Copyright information
- Privacy and Terms links
- Multiple decorative gradient backgrounds

**Issue**: The footer itself creates cognitive overhead at the end of an already long page.

### 4.5 Mobile Menu

The mobile menu has good fundamentals but issues:

**Good**:
- Clear hamburger/close icons
- Proper ARIA attributes
- Smooth transitions

**Issues**:
- The transition effects may still be too quick for some users even with reduced motion
- No visual indication of which page you're currently on in mobile menu
- Menu covers content rather than pushing it down (may be disorienting)

### 4.6 Contact Form Error Messages

While error messages are present and associated correctly, they could be more specific:

**Current**: "Please correct the following errors:"
**Better**: "We found 2 problems with your form. Please fix them below:"

**Current Error**: Generic Laravel validation messages
**Better**: "Please enter your full name" instead of "The name field is required"

### 4.7 Privacy Policy and Terms

These pages show better plain language in some areas but still include legal jargon:

- "UK GDPR"
- "Data Processing Agreements"
- "Indemnification"
- "Severability"

**Issue**: While legal accuracy is important, explanatory text would help users understand their rights without legal expertise.

---

## 5. Recommendations

### 5.1 Immediate Priorities (High Impact, Lower Effort)

#### A. Simplify Language (Priority 1)

**Action Items**:
1. Run all content through Hemingway Editor or similar tool
2. Target Flesch-Kincaid Grade Level: 8-10 maximum
3. Replace jargon with plain language:
   - "Bespoke" → "Custom-built"
   - "ITIL-aligned" → "Industry-standard IT processes"
   - "Organizational transformation" → "Helping your company adapt to change"

4. Add a glossary page or tooltips for necessary technical terms
5. Provide examples after abstract concepts:
   - "We build web applications. For example: booking systems, customer portals, and internal tools."

#### B. Reduce Visual Complexity (Priority 1)

**Action Items**:
1. Remove or significantly reduce decorative blur elements
2. Limit gradients to headers only
3. Reduce the number of hover effects and animations
4. Increase white space between sections
5. Consider a "simple view" toggle that:
   - Removes decorative elements
   - Uses solid colors instead of gradients
   - Displays content in single column
   - Removes animations

#### C. Add Page Structure Aids (Priority 2)

**Action Items**:
1. Add a "Table of Contents" at the top of long pages
2. Include estimated reading time (e.g., "5 minute read")
3. Add a sticky "Back to top" button
4. Show scroll progress indicator
5. Add "You are here" breadcrumbs on all pages

#### D. Improve Form Experience (Priority 2)

**Action Items**:
1. Break contact form into steps:
   - Step 1: Your details (name, email)
   - Step 2: Company information (optional)
   - Step 3: Your message
2. Show progress: "Step 1 of 3"
3. Allow saving and returning later
4. Estimate time: "This form takes about 2 minutes to complete"
5. Use more conversational, helpful error messages

### 5.2 Medium-Term Improvements (Higher Effort, High Impact)

#### A. Add Customization Options

**Implement User Controls**:
```html
<div class="accessibility-toolbar">
    <button>Increase text size</button>
    <button>Increase line spacing</button>
    <button>High contrast mode</button>
    <button>Focus mode (reduce visual complexity)</button>
    <button>Dyslexia-friendly font</button>
</div>
```

**Features**:
- Font size: Small, Medium, Large, Extra Large
- Line spacing: Normal, Relaxed, Loose
- Color schemes: Default, High contrast, Dark mode
- Focus mode: Removes decorative elements
- Font choice: Include OpenDyslexic or similar

#### B. Provide Multiple Content Formats

**Action Items**:
1. Create explainer videos for each service (2-3 minutes)
2. Add audio versions of key pages
3. Develop infographics that show processes visually
4. Create downloadable PDF guides in simplified language
5. Add alt text that genuinely describes image content, not just "icon"

#### C. Implement Progressive Disclosure

**Pattern to Use**:
- Show summaries first
- Allow users to expand for details
- Use accordion patterns for long content
- Provide "Read more" / "Show less" controls

**Example for Service Cards**:
```html
<article>
    <h3>Web Development</h3>
    <p>We build custom web systems.</p>
    <button aria-expanded="false">Learn more</button>
    <div hidden>
        <!-- Detailed information appears here when expanded -->
    </div>
</article>
```

#### D. Add Neurodivergent User Testing

**Recommended Process**:
1. Recruit users with:
   - ADHD
   - Autism spectrum
   - Dyslexia
   - Anxiety disorders
   - Cognitive processing differences

2. Conduct task-based usability testing
3. Use think-aloud protocol
4. Ask specifically about:
   - Visual overwhelm
   - Cognitive load
   - Clarity of language
   - Ability to focus
   - Preference for customization

5. Iterate based on findings

### 5.3 Long-Term Strategic Changes (Higher Effort, Transformative Impact)

#### A. Develop a Literacy Strategy

**Action Items**:
1. Establish reading level targets for different page types:
   - Marketing pages: Grade 6-8
   - Service descriptions: Grade 8-10
   - Legal pages: Grade 10-12 (with plain language summaries at Grade 6-8)

2. Create a content style guide that mandates:
   - Short sentences (15-20 words maximum)
   - Active voice
   - Common words over uncommon
   - One idea per sentence
   - Examples after abstract concepts

3. Train content creators in plain language principles
4. Implement automated checking in content workflow

#### B. Design for Cognitive Diversity as Default

**Shift from Compliance to Empathy**:
- Start every design decision by asking: "How does this work for someone with ADHD?"
- Use the Cognitive Accessibility Guidance from W3C as a baseline
- Conduct cognitive walkthroughs with diverse team members
- Create personas representing cognitive diversity

**Specific Design Principles**:
1. **One thing at a time**: Limit each screen to one primary action
2. **Clear next steps**: Always tell users what to do next
3. **Forgiveness**: Make it easy to undo or go back
4. **Progress indication**: Show where users are in multi-step processes
5. **Chunking**: Break information into digestible pieces
6. **Predictability**: Use consistent patterns throughout
7. **Error prevention**: Design to avoid errors rather than just catching them

#### C. Create an Inclusive Design System

**Components Needed**:
1. **Button Variants**:
   - Simple (solid color, no gradients, clear label)
   - With icon (icon + text, not icon alone)
   - Progress button (shows loading state clearly)

2. **Content Blocks**:
   - Summary card (brief overview, option to expand)
   - Step indicator (clear progress through processes)
   - Alert (success, error, warning, info - with icons and clear language)

3. **Layout Templates**:
   - Single column (for focus)
   - Two column (for comparison)
   - Card grid (with clear hierarchy)

4. **Typography Scale**:
   - With cognitive load ratings
   - Guidelines for when to use each level

5. **Animation Library**:
   - All respecting prefers-reduced-motion
   - Clear purpose (not decorative)
   - Gentle, predictable motion

#### D. Implement Comprehensive Testing

**Create Testing Protocol**:
1. Automated testing:
   - WAVE tool for basic accessibility
   - axe DevTools for deeper issues
   - Reading level checkers for all content

2. Manual testing:
   - Keyboard navigation (entire site)
   - Screen reader testing (JAWS, NVDA, VoiceOver)
   - Cognitive walkthrough (simulating processing differences)
   - Mobile testing (touch targets, navigation)

3. User testing:
   - Recruit diverse participants including:
     - Neurodivergent users
     - Users with low digital literacy
     - Users with anxiety
     - Users with dyslexia
     - Older adults
     - English as second language speakers

4. Ongoing monitoring:
   - User feedback mechanism
   - Analytics for task completion rates
   - Error tracking
   - Regular audits (quarterly)

---

## 6. Checklist Results

Based on the Website Evaluation Checklist from my persona profile:

| Criterion | Status | Notes |
|-----------|--------|-------|
| ✅ Is content written in plain, simple language? | ⚠️ Partial | Some sections good, but extensive jargon throughout |
| ✅ Is the layout predictable and consistent? | ✅ Yes | Navigation and structure are consistent |
| ✅ Is information chunked into digestible sections? | ⚠️ Partial | Sections exist but are often dense; needs better chunking |
| ✅ Are there multiple ways to consume content? | ❌ No | Content is text-only; no video, audio, or visual alternatives |
| ✅ Can users control timing and pacing? | ⚠️ Partial | No auto-play, but no user controls for reading pace either |
| ✅ Is there clear visual hierarchy and focus? | ⚠️ Partial | Hierarchy exists but competing decorative elements distract |
| ✅ Are errors prevented where possible? | ✅ Yes | Form validation with good error messages |
| ✅ Is the design not visually overwhelming? | ❌ No | Multiple gradients, animations, and decorative elements create visual noise |
| ✅ Can users customize their experience? | ❌ No | No customization options available |
| ✅ Is content culturally sensitive and inclusive? | ✅ Yes | Content appears neutral and inclusive |
| ✅ Does design support different literacy levels? | ❌ No | High reading level required; no scaffolding for lower literacy |
| ✅ Were neurodivergent users included in testing? | ❓ Unknown | No evidence of inclusive user research |

**Summary**: 3 Full Pass, 4 Partial Pass, 5 Fail, 1 Unknown

---

## 7. Overall Rating: 6.5/10

### Rating Breakdown

**Technical Accessibility (8/10)**
Strong foundation in WCAG compliance, semantic HTML, and keyboard navigation. Points deducted for missing some cognitive accessibility features.

**Plain Language (4/10)**
Inconsistent application. Some sections are clear, but extensive use of jargon and complex sentence structures creates barriers.

**Cognitive Load (5/10)**
Layout is predictable, but information density, visual complexity, and lack of progressive disclosure create cognitive overwhelm.

**Neurodivergent Support (4/10)**
Reduced motion support is excellent, but design doesn't account for ADHD (distraction), autism (sensory sensitivities), or dyslexia (reading support).

**Customization & Flexibility (2/10)**
No user controls for adjusting the interface to individual needs—a critical gap in inclusive design.

**Content Format Diversity (3/10)**
Content is primarily text-based with limited alternatives for different learning styles.

**Error Prevention & Recovery (8/10)**
Good form design with clear labels, help text, and error messages.

**Cultural & Contextual Inclusion (9/10)**
Content is neutral and inclusive without apparent bias.

### What Would Raise the Score to 9+

To achieve exemplary inclusive design:

1. **Plain language throughout** (reading level 6-8)
2. **User customization options** (fonts, spacing, colors, complexity)
3. **Multiple content formats** (video, audio, visual)
4. **Progressive disclosure** of complex information
5. **Reduced visual complexity** as default
6. **Neurodivergent user testing** incorporated into design process
7. **Cognitive accessibility guidance** from W3C implemented
8. **Focus mode** that removes distractions
9. **Multi-step forms** with clear progress
10. **Comprehensive content chunking** with clear navigation

---

## 8. Concluding Thoughts

As an Inclusive Design Lead, I want to emphasize that **accessibility is the what, but inclusive design is the how and why**. This website demonstrates compliance with technical accessibility standards, which is commendable and puts it ahead of many competitors. However, true inclusive design goes beyond compliance—it embraces diversity as the norm and designs proactively for the widest range of human needs.

### The Opportunity

The good news is that many of the recommended changes will benefit *all* users, not just those with disabilities:

- **Plain language** helps everyone understand faster
- **Reduced visual complexity** allows everyone to focus better
- **Clear information architecture** helps everyone find what they need
- **Multiple content formats** let everyone choose their preferred learning style
- **Customization options** empower everyone to optimize their experience

This is the core principle I always emphasize: **When you design for disabilities, you often make things better for everyone.**

### Moving Forward

I recommend prioritizing the "Immediate Priorities" section (5.1) as quick wins that will significantly improve the experience for neurodivergent users, those with cognitive disabilities, and users with varying literacy levels. These changes can be implemented incrementally without a full redesign.

The medium and long-term recommendations represent a more transformative shift toward designing with cognitive diversity as a primary consideration from the start. This cultural change within the design process will yield the greatest long-term benefits.

### Final Note

I'm encouraged by the strong technical foundation evident in the code—the attention to semantic HTML, ARIA attributes, and color contrast shows that the team cares about accessibility. With that same care extended to cognitive accessibility and inclusive design principles, Solutions Delivered can create a truly welcoming experience for users of all abilities.

**The infrastructure is there. Now it's time to build on it with empathy.**

---

*This review reflects my perspective as an Inclusive Design Lead with a background in cognitive psychology. I'm happy to discuss any of these findings in more detail or provide guidance on implementation strategies.*

**Contact**: Aisha Patel
**Specialization**: Inclusive Design, Cognitive Accessibility, Neurodivergent User Experience
