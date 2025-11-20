# Information Architecture Review
**Solutions Delivered Website**

**Reviewer:** Rebecca Patterson, Senior Information Architect
**Review Date:** November 20, 2025
**Scope:** Complete IA audit including navigation, content structure, wayfinding, and scalability

---

## Executive Summary

I've conducted a comprehensive information architecture review of the Solutions Delivered website. The site demonstrates a refreshingly simple, flat hierarchy that works well for the current content volume. The navigation is consistent, predictable, and accessible—exactly what you want in a small business site. However, there are notable gaps in wayfinding tools (breadcrumbs, search, HTML sitemap) and limited planning for future growth. The site would benefit from enhanced cross-linking and better support for users who prefer different navigation strategies.

**Overall Rating: 7.5/10**

The IA is solid and functional, but there's room for improvement in discoverability, wayfinding, and scalability planning.

---

## 1. Strengths

### 1.1 Hierarchy & Structure
The site uses an appropriately shallow hierarchy (2 levels maximum), which is perfect for the content volume. I can immediately understand the full scope of the site:

```
Home
├── About
├── Solutions
│   ├── Web Development (#anchor)
│   ├── Service Management (#anchor)
│   ├── Project Management (#anchor)
│   └── Business Change (#anchor)
├── How We Work
├── Careers
├── Get Started (Contact)
├── Privacy Policy
└── Terms of Service
```

This flat structure eliminates the cognitive overhead of deep navigation trees. Users can get anywhere in one click—that's excellent IA.

### 1.2 Consistent Navigation
The navigation is remarkably consistent across all pages:
- **Header navigation:** All 6 primary pages plus "Get Started" CTA
- **Footer navigation:** Mirrors header navigation with additional legal links
- **Mobile navigation:** Identical structure in hamburger menu

The consistency between desktop and mobile is particularly strong. There's no confusing "mobile-only" or "desktop-only" content—the same mental model works everywhere.

**File Reference:** `/home/user/solutionsdelivered.co.uk/resources/views/partials/header.blade.php`
**File Reference:** `/home/user/solutionsdelivered.co.uk/resources/views/partials/footer.blade.php`

### 1.3 Clear Active State Indication
The navigation uses visual indicators (border-bottom) to show the current page, which aids orientation. This is a small detail that makes a big difference in wayfinding.

```blade
{{ request()->routeIs('home') ? 'border-b-2 border-[#198fd9]' : '' }}
```

### 1.4 Semantic URL Structure
All URLs are clean, descriptive, and use trailing slashes consistently:
- `/about/`
- `/solutions/`
- `/how-we-work/`
- `/careers/`
- `/get-started/`
- `/privacy/`
- `/terms/`

This consistency helps users predict URLs and makes the site more shareable. The URLs match the navigation labels perfectly—no cognitive dissonance between what users click and where they land.

**File Reference:** `/home/user/solutionsdelivered.co.uk/routes/web.php`

### 1.5 Effective Use of Anchor Links
The Solutions page uses anchor links (`#web-development`, `#service-management`, etc.) to create sub-navigation within a long page. This is a smart compromise between having multiple pages and maintaining a single-page experience. The home page links directly to these anchors, creating useful shortcuts.

**File Reference:** `/home/user/solutionsdelivered.co.uk/resources/views/home.blade.php` (lines 100-105, 132-137)

### 1.6 XML Sitemap Present
There's a properly structured XML sitemap at `/sitemap.xml` with appropriate priority and change frequency values. This aids search engine crawling and indexing.

**File Reference:** `/home/user/solutionsdelivered.co.uk/resources/views/sitemap.blade.php`

### 1.7 Logical Content Grouping
Content is grouped logically:
- **About the company:** About page
- **What they do:** Solutions page
- **How they do it:** How We Work page
- **Join them:** Careers page
- **Contact them:** Get Started page
- **Legal stuff:** Privacy & Terms

This follows a natural user journey from awareness → consideration → action.

### 1.8 Strong Accessibility Foundations
The IA includes excellent accessibility features:
- Skip-to-main-content link
- Proper ARIA labels on navigation
- Semantic HTML structure
- Descriptive link text (no "click here")

**File Reference:** `/home/user/solutionsdelivered.co.uk/resources/views/partials/header.blade.php` (line 2)

---

## 2. Weaknesses

### 2.1 No User-Facing HTML Sitemap
The site has an XML sitemap for search engines but no HTML sitemap for users. This is a missed opportunity for:
- Users who prefer to browse the full site structure at once
- Quick access to all pages without navigation hunting
- SEO (HTML sitemaps still have value)

**Impact:** Medium — Some users (particularly those looking for something specific) will struggle without this overview.

### 2.2 No Search Functionality
There's no search capability on the site. For a small site (8 pages), this might seem unnecessary, but consider:
- Users looking for specific terms ("WCAG", "Laravel", "risk management")
- Users who don't understand the navigation labels
- Users who want to quickly check if something is covered

The absence of search forces everyone into the browse-only navigation model.

**Impact:** Medium — Site is small enough that most users can find things, but search would improve findability significantly.

### 2.3 No Breadcrumbs
While there are decorative "badge breadcrumbs" showing the page name, there are no true navigational breadcrumbs showing hierarchy or path. For example:

```
Current: [Our Services]
Better: Home > Solutions > Service Management
```

True breadcrumbs help users understand where they are and provide quick navigation up the hierarchy.

**Impact:** Low-Medium — The flat structure means breadcrumbs are less critical, but they'd still aid orientation.

### 2.4 Limited Cross-Linking
There's minimal contextual linking between related content. For example:
- The About page mentions "Service Management, Project Management, and Business Change" but doesn't link to the Solutions page
- The Careers page mentions working on projects but doesn't link to Solutions
- The How We Work page describes the process but doesn't link to specific solutions

This forces users to rely solely on main navigation rather than discovering content naturally through reading.

**File References:**
- `/home/user/solutionsdelivered.co.uk/resources/views/about.blade.php` (lines 46-47)
- `/home/user/solutionsdelivered.co.uk/resources/views/careers.blade.php` (line 132)

**Impact:** Medium — Users must constantly return to navigation rather than flowing naturally through related content.

### 2.5 Legal Pages Orphaned in Footer
Privacy and Terms pages only appear in the footer, not in main navigation. While this is common practice, it means:
- Users must scroll to bottom to find these
- No clear "back to main site" link from legal pages
- Legal pages feel disconnected from the main site experience

**Impact:** Low — Expected pattern, but could be improved.

### 2.6 No "Back to Top" or In-Page Navigation
The Solutions page is quite long with four sections. There's no:
- Sticky navigation within the page
- "Back to top" button
- Jump-to-section menu

Users must manually scroll back up to navigate elsewhere.

**File Reference:** `/home/user/solutionsdelivered.co.uk/resources/views/solutions.blade.php`

**Impact:** Low — Content isn't so long it's a major problem, but it's a usability enhancement opportunity.

### 2.7 No Taxonomy or Tagging System
There's no visible taxonomy, categories, or tags. This limits:
- Ability to group content by theme (e.g., "all ITIL-related content")
- Discovery of related information
- Future scalability when content grows

**Impact:** Low now, High in future — Not needed at current scale but will become critical as content grows.

### 2.8 Scalability Concerns
The current IA works perfectly for 8 pages, but what happens when the business adds:
- Case studies for each solution?
- Blog posts about industry topics?
- Team member profiles?
- Service-specific deep-dive pages?

There's no clear plan for how the IA would evolve. The flat structure that works now could become problematic.

**Impact:** Low now, High in future — The IA doesn't appear designed to grow.

### 2.9 404 Page Not Linked
There's a 404 error page (`/home/user/solutionsdelivered.co.uk/resources/views/errors/404.blade.php`) but it's not linked anywhere in the navigation or sitemap. Users who land there might not know how to get back to useful content.

**Impact:** Low — Only affects users who encounter errors.

### 2.10 No Visual Site Map or User Journey Flows
There's no documentation showing:
- Visual site architecture
- User journey flows for different personas
- Content relationships and dependencies
- IA governance plan

**Impact:** Low for users, High for maintenance — Makes it harder to maintain consistency as site evolves.

---

## 3. Specific Issues with File Paths

### 3.1 Header Navigation
**File:** `/home/user/solutionsdelivered.co.uk/resources/views/partials/header.blade.php`

**Issue (Lines 20-38):** Navigation structure is hardcoded with duplicated markup. If you need to add a page or change order, you must update both desktop and mobile navigation separately (lines 20-38 and 60-66).

**IA Impact:** Increases risk of navigation inconsistencies between desktop and mobile.

**Recommendation:** Extract navigation data into a config array or component to ensure consistency.

### 3.2 Footer Navigation
**File:** `/home/user/solutionsdelivered.co.uk/resources/views/partials/footer.blade.php`

**Issue (Lines 39-77):** Footer navigation is also hardcoded separately. Now you have three places to update navigation (header desktop, header mobile, footer).

**IA Impact:** High maintenance burden, risk of navigation drift.

**Recommendation:** Create a single source of truth for navigation structure.

### 3.3 Solutions Page Long Scrolling
**File:** `/home/user/solutionsdelivered.co.uk/resources/views/solutions.blade.php`

**Issue:** 364-line template with four major sections and no in-page navigation helpers beyond anchor targets.

**IA Impact:** Users who land mid-page (from anchor links) have no context for other sections without scrolling extensively.

**Recommendation:** Add a "jump to section" menu at the top and/or "back to top" buttons.

### 3.4 Home Page Service Cards
**File:** `/home/user/solutionsdelivered.co.uk/resources/views/home.blade.php`

**Issue (Lines 80-207):** Service cards include anchor links to solutions page sections, but there's no indication that these will jump to a specific section vs. loading a new page. The link text "Learn more" is also too generic.

**IA Impact:** Users might not understand they're going to a specific section vs. a dedicated page.

**Recommendation:** Make anchor link behavior more explicit in link text, e.g., "Learn more about Web Development →"

### 3.5 Sitemap.xml Missing lastmod Dates
**File:** `/home/user/solutionsdelivered.co.uk/resources/views/sitemap.blade.php`

**Issue (Lines 4-50):** All pages use `now()->toAtomString()` for lastmod, which is incorrect. This tells search engines every page was just modified, even when content hasn't changed.

**IA Impact:** Reduces effectiveness of XML sitemap for search engine crawling prioritization.

**Recommendation:** Use actual file modification dates or track content updates in database.

### 3.6 Routes File Organization
**File:** `/home/user/solutionsdelivered.co.uk/routes/web.php`

**Issue (Lines 6-16):** Routes are organized sequentially but not grouped conceptually. Legal pages are separated from main pages only by a comment.

**IA Impact:** As routes grow, this will become harder to maintain and understand.

**Recommendation:** Group routes by type with route groups and middleware.

---

## 4. Recommendations

### Priority 1 (High Impact, Quick Wins)

#### 4.1 Add HTML Sitemap Page
Create a `/sitemap/` page that shows all site pages in a hierarchical, human-readable format.

**Why:** Provides users with a complete overview of site structure. Low effort, high value.

**Implementation:**
- Create new route and view
- List all main pages with brief descriptions
- Link from footer
- Add to XML sitemap

#### 4.2 Implement Search Functionality
Add a simple search feature that searches page titles and content.

**Why:** Enables users who prefer search over browse. Particularly valuable as content grows.

**Implementation:**
- Basic keyword search across page content
- Search box in header
- Dedicated search results page
- Consider Laravel Scout with database driver for simplicity

#### 4.3 Improve Cross-Linking
Add contextual links between related content throughout the site.

**Why:** Enables natural content discovery, reduces reliance on main navigation.

**Examples:**
- About page → Link to "View our Solutions" when mentioning service areas
- How We Work → Link to specific solutions when describing delivery areas
- Careers → Link to Solutions page when describing project types
- Solutions → Link to How We Work when describing collaboration approach

#### 4.4 Consolidate Navigation Data
Create a single source of truth for navigation structure.

**Why:** Eliminates risk of inconsistencies, makes updates easier.

**Implementation:**
```php
// config/navigation.php
return [
    'primary' => [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        // etc...
    ],
    'footer' => [ /* footer-specific items */ ],
    'legal' => [ /* legal links */ ],
];
```

### Priority 2 (Medium Impact, Moderate Effort)

#### 4.5 Add True Breadcrumb Navigation
Implement proper breadcrumb navigation showing hierarchy and location.

**Why:** Improves wayfinding, especially as site grows.

**Implementation:**
- Add breadcrumb component
- Show on all pages except home
- Format: Home > Solutions > Service Management
- Include structured data for search engines

#### 4.6 Enhance Solutions Page Navigation
Add in-page navigation helpers to the Solutions page.

**Why:** Long page needs better orientation tools.

**Implementation:**
- "Jump to section" menu at top
- Sticky "back to top" button on scroll
- Section indicators showing current location
- Consider splitting into separate pages if content grows significantly

#### 4.7 Document IA Structure
Create visual documentation of site architecture.

**Why:** Makes governance easier, helps team understand structure.

**Create:**
- Visual site map
- User journey flows for key personas
- Content relationship diagram
- IA governance guidelines

#### 4.8 Plan for Growth
Document how the IA should evolve as content grows.

**Why:** Prevents ad-hoc decisions that break structure.

**Plan for:**
- Case studies: `/solutions/[service-name]/case-studies/` ?
- Blog: `/insights/` or `/resources/` ?
- Team profiles: `/about/team/` ?
- Service deep-dives: `/solutions/[service-name]/` as full pages?

### Priority 3 (Nice to Have, Lower Impact)

#### 4.9 Add Related Content Sections
Add "Related Pages" or "You Might Also Like" sections to relevant pages.

**Why:** Increases discoverability, keeps users engaged.

**Example:**
- Solutions page: "Learn How We Work" link
- About page: "See Our Solutions" link
- Careers page: "Learn About Our Culture" → How We Work

#### 4.10 Improve Legal Page Integration
Make legal pages feel more integrated with main site.

**Why:** Better user experience, clearer navigation.

**Implementation:**
- Add "Back to main site" link at top of legal pages
- Consider adding legal pages to a grouped section in footer
- Add brief intro explaining why these pages exist

#### 4.11 Enhance 404 Page Navigation
Ensure 404 page has clear navigation back to useful content.

**Why:** Helps lost users recover.

**Implementation:**
- Include main navigation on 404
- Add search box if search is implemented
- Show popular pages
- Add helpful message suggesting where they might want to go

#### 4.12 Add Visual Hierarchy Indicators
Use visual design to better indicate information hierarchy.

**Why:** Makes structure more scannable.

**Examples:**
- Different header styles for page sections vs. subsections
- Visual separators between major content blocks
- Clearer distinction between primary and secondary navigation

---

## 5. Checklist Results

Based on the persona evaluation checklist:

| Criterion | Status | Notes |
|-----------|--------|-------|
| **Can users predict what they'll find in each section?** | ✅ Yes | Navigation labels are clear and match content |
| **Is the navigation consistent across pages?** | ✅ Yes | Excellent consistency between header, footer, mobile |
| **Are similar items grouped logically?** | ✅ Yes | Logical grouping by purpose and user journey |
| **Is the hierarchy appropriate (not too deep/flat)?** | ✅ Yes | 2-level hierarchy is perfect for current content volume |
| **Do labels match user vocabulary (not jargon)?** | ✅ Yes | Plain language throughout, no unnecessary jargon |
| **Are there multiple ways to find key content?** | ⚠️ Partial | Main nav + footer + some anchor links, but no search or breadcrumbs |
| **Is search available and functional?** | ❌ No | No search functionality present |
| **Are breadcrumbs present and accurate?** | ❌ No | Badge breadcrumbs show page name but not hierarchy |
| **Can the structure scale without breaking?** | ⚠️ Concerns | Works now but no clear plan for growth |
| **Is there a clear site map available?** | ⚠️ Partial | XML sitemap for search engines, but no HTML sitemap for users |

**Score: 6.5/10 criteria fully met**

---

## 6. Overall Rating: 7.5/10

### What's Working Well (7.5/10)
- **Hierarchy (9/10):** Appropriately shallow for content volume
- **Consistency (9/10):** Navigation is reliably consistent across all contexts
- **Labeling (8/10):** Clear, user-friendly labels throughout
- **URL Structure (9/10):** Clean, semantic, predictable URLs
- **Accessibility (8/10):** Strong accessibility foundations in IA
- **Mobile Navigation (9/10):** Excellent mobile navigation structure

### What Needs Improvement (5.5/10)
- **Wayfinding (4/10):** No breadcrumbs, no search, limited orientation tools
- **Cross-Linking (5/10):** Minimal contextual linking between related content
- **Scalability (5/10):** No clear plan for how IA evolves as content grows
- **Discovery (6/10):** Limited ways to discover content beyond main navigation
- **User Sitemap (3/10):** No HTML sitemap for users to browse full structure
- **Documentation (4/10):** No visual IA documentation or governance plan

---

## 7. Conclusion

This site has a solid, functional information architecture that serves the current business needs well. The navigation is clean, consistent, and accessible. The flat hierarchy eliminates confusion. The URLs are semantic and shareable. For a small business consultancy website, these fundamentals are more important than fancy features—and Solutions Delivered gets them right.

However, there are notable gaps in wayfinding tools and discoverability. The absence of search and breadcrumbs limits how users can navigate. The lack of cross-linking means users must constantly return to main navigation rather than flowing naturally through content. Most critically, there's no apparent plan for how the IA should evolve as the business grows.

**My recommendation:** Implement the Priority 1 items (HTML sitemap, search, cross-linking, navigation consolidation) within the next 1-2 months. These are relatively quick wins that will significantly improve the user experience. Then, as you plan future content (case studies, blog posts, etc.), invest time in Priority 2 items, especially the growth planning and IA documentation.

The current IA works because the site is small. Don't let that lead to complacency—plan now for the structure you'll need when the site is three times this size. Good IA is about building foundations that can grow gracefully.

**If your users can't find it, it doesn't exist.** Right now, your users can find most things most of the time. Let's make it all things, all the time.

---

**Rebecca Patterson**
Senior Information Architect
15 years experience in IA and content strategy
Edinburgh, UK
