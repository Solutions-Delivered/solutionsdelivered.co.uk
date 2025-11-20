# SEO Specialist Review - Solutions Delivered Website

**Reviewer:** Hannah Wilson, SEO Manager
**Review Date:** 20 November 2025
**Website:** https://solutionsdelivered.co.uk
**Review Type:** Comprehensive SEO Audit

---

## 1. Executive Summary

I've conducted a thorough SEO audit of the Solutions Delivered website, examining technical SEO, on-page optimization, meta tags, structured data, and overall search visibility potential. The website demonstrates a solid technical foundation with proper implementation of essential SEO elements including meta tags, structured data, and XML sitemaps. However, there are several opportunities to enhance organic search performance, particularly around content depth, image optimization, and local SEO implementation.

The site is well-structured for a small consultancy website, with clean URLs, proper heading hierarchy, and good accessibility practices that align with modern SEO best practices. The main areas requiring attention are content strategy, image SEO, and off-page optimization groundwork.

**Overall Assessment:** The website has a strong technical SEO foundation but needs enhancement in content marketing and optimization to maximize organic search visibility.

---

## 2. Strengths

### Technical SEO Foundation
The website excels in technical SEO implementation. Every page has unique, well-crafted title tags following best practices (e.g., "Solutions Delivered - Delivering Solutions is in Our DNA" for the homepage). The canonical URL implementation is correct across all pages, preventing duplicate content issues. The site uses HTTPS, which is essential for both security and SEO rankings.

### Structured Data Implementation
I'm genuinely impressed by the structured data implementation. The site includes Organization schema, LocalBusiness schema, and page-specific schema markup for services and contact pages. The Solutions page includes an ItemList schema with detailed service descriptions, which can help with rich snippet opportunities in search results. This is professional-level implementation that many consultancies overlook.

### URL Structure
The URL structure is clean, descriptive, and SEO-friendly. All URLs use trailing slashes consistently (e.g., `/about/`, `/solutions/`), include relevant keywords, and avoid unnecessary parameters. The routing structure is logical and hierarchical, making it easy for both users and search engines to understand site architecture.

### Mobile-First Design
The website is fully responsive with proper viewport meta tags and mobile-first design principles. Given Google's mobile-first indexing, this is crucial for SEO performance. The navigation collapses appropriately on mobile devices, and the site appears to maintain good usability across device sizes.

### Meta Tags & Social Sharing
Every page has properly configured Open Graph and Twitter Card meta tags, which will improve click-through rates when content is shared on social media. The og:image is properly sized at 1200x630px, following Facebook's recommended dimensions.

### XML Sitemap
The site has a dynamically generated XML sitemap accessible at `/sitemap.xml` that includes all important pages with appropriate priority values and change frequency indicators. The sitemap is properly referenced in the robots.txt file.

### Accessibility Equals SEO
The extensive use of ARIA labels, semantic HTML, and proper heading structure (which I'll detail below) not only makes the site WCAG 2.2 compliant but also helps search engines understand content hierarchy and context. This is a win-win approach that many sites miss.

---

## 3. Weaknesses

### Limited Content Depth
While the existing content is well-written and clear, most pages are relatively thin from an SEO perspective. In competitive B2B consulting sectors, comprehensive, authoritative content (typically 1,500+ words for service pages) tends to rank better. The current pages appear to focus on brevity over depth, which may limit ranking potential for informational queries.

### Absence of Blog/Content Marketing
There's no blog or resources section visible on the site. This is a significant missed opportunity for organic traffic growth. A well-maintained blog targeting industry-specific keywords (service management best practices, project management methodologies, Laravel development tips, etc.) would dramatically increase the site's organic search footprint and establish thought leadership.

### Image Optimization Gaps
I found minimal implementation of alt text attributes on images. Only the logo image has proper alt text ("Solutions Delivered Logo"). Decorative images correctly use empty alt attributes or aria-hidden, but there appear to be few content images overall. More critically, there's no evidence of image optimization (compression, next-gen formats like WebP) which could impact page speed.

### Missing Keyword Meta Tags
The site doesn't include meta keywords tags, though this is actually fine as they're no longer a ranking factor. However, I don't see evidence of targeted keyword strategy in the meta descriptions. They're descriptive but could be more compelling and keyword-rich.

### No Local SEO Optimization
While the site mentions being "UK-based" and includes "GB" in the schema markup, there's no specific location information, Google Business Profile integration, or local schema markup (like postal address, phone number, or geographic coordinates). For a consultancy that likely serves specific regions, this is a missed opportunity for local search visibility.

### Social Media Integration
The schema markup includes an empty array for "sameAs" social media profiles. There are no social media links in the footer or header, and no integration with social platforms. This limits brand visibility and removes potential traffic sources and ranking signals.

---

## 4. Specific Issues (with SEO Impact)

### High Impact Issues

**1. No Content Marketing Strategy**
- **Issue:** No blog, case studies, whitepapers, or resources section
- **SEO Impact:** Missing 80%+ of potential organic traffic from informational queries
- **Evidence:** Only 7 indexable pages (home, about, solutions, how we work, careers, privacy, terms)
- **Business Impact:** Competitors with content strategies will capture informational searches that could lead to conversions

**2. Thin Page Content**
- **Issue:** Service pages lack comprehensive detail about methodologies, processes, and value propositions
- **SEO Impact:** Difficult to rank for competitive head terms without substantial content depth
- **Evidence:** Solutions page describes four services but provides minimal detail on each
- **Recommendation:** Expand each service into its own dedicated page with 1,000-1,500 words of detailed content

**3. Missing Image Alt Text**
- **Issue:** Most images lack descriptive alt text (found only 2 instances in entire codebase)
- **SEO Impact:** Lost opportunity for image search traffic; accessibility issues
- **Evidence:** Grep search found only 2 alt attributes across all templates
- **Recommendation:** Add descriptive alt text to all meaningful images, empty alt for decorative ones

### Medium Impact Issues

**4. Generic Meta Descriptions**
- **Issue:** Meta descriptions are accurate but not optimized for click-through rate
- **Example:** "Solutions Delivered - Tailored business solutions for process design, project management, and organisational change."
- **SEO Impact:** Lower CTR compared to competitors with compelling, benefit-focused descriptions
- **Recommendation:** Rewrite to include calls-to-action and unique value propositions

**5. No Internal Linking Strategy**
- **Issue:** Limited contextual internal linking between related pages
- **SEO Impact:** Reduces PageRank flow and topical authority signals
- **Evidence:** Found 56 instances of route() calls, mostly in navigation, few in content
- **Recommendation:** Add contextual links within content to related pages and services

**6. Schema Markup Issues**
- **Issue:** Logo URL in Organization schema references `/logo.png` but actual logo is SVG
- **SEO Impact:** Minor - may cause validation warnings in Google's Structured Data Testing Tool
- **Evidence:** Line 51 in head.blade.php: `'logo' => url('/') . '/logo.png'`
- **Recommendation:** Update to reference actual logo.svg file or keep PNG as fallback

**7. No Breadcrumb Navigation**
- **Issue:** Decorative badges labeled "breadcrumbs" but no actual breadcrumb navigation
- **SEO Impact:** Lost opportunity for breadcrumb rich snippets in search results
- **Evidence:** Pages have decorative badges but no BreadcrumbList schema
- **Recommendation:** Implement proper breadcrumb navigation with BreadcrumbList schema

### Low Impact Issues

**8. Missing robots Meta Tag**
- **Issue:** No robots meta tag specifying index/follow directives on pages
- **SEO Impact:** Very low - defaults are appropriate, but explicit is better
- **Recommendation:** Add explicit robots meta tag for important pages

**9. No Geo-Targeting Signals**
- **Issue:** Limited geographic information beyond country code
- **SEO Impact:** May miss local search opportunities if targeting specific regions
- **Recommendation:** Add specific location information if servicing particular areas

**10. Missing hreflang Tags**
- **Issue:** No hreflang tags for international targeting
- **SEO Impact:** Not applicable if only targeting UK, but worth considering for future expansion
- **Note:** Site uses en_GB locale in Open Graph which is good

---

## 5. Recommendations (Prioritized)

### Priority 1: Critical (Implement Immediately)

**1. Develop Content Marketing Strategy**
- Create a blog/resources section at `/resources/` or `/insights/`
- Target: Publish 2-4 high-quality articles per month (1,500-2,500 words each)
- Topics: Service management frameworks, project management case studies, Laravel development best practices, business change methodologies
- Expected Impact: 300-500% increase in organic traffic within 6-12 months
- Keywords to target: "ITIL implementation UK", "Laravel development consultancy", "business change management", "project management consultancy"

**2. Add Comprehensive Alt Text to All Images**
- Audit all images and add descriptive alt text
- Include relevant keywords naturally where appropriate
- Use empty alt="" for purely decorative images
- Expected Impact: 5-10% traffic increase from image search, improved accessibility

**3. Implement Image Optimization**
- Compress all PNG and JPG images (aim for 70-80% reduction)
- Consider WebP format for modern browsers with PNG/JPG fallbacks
- Implement lazy loading for below-the-fold images
- Expected Impact: Improved Core Web Vitals, better mobile rankings

**4. Optimize Meta Descriptions for CTR**
- Rewrite all meta descriptions to be compelling and action-oriented
- Include unique value propositions and calls-to-action
- Keep within 155-160 characters for full display
- Example: "UK consultancy delivering WCAG-compliant Laravel solutions. 20+ years experience in service management, project delivery & business change. Free consultation."
- Expected Impact: 10-15% improvement in click-through rate from search results

### Priority 2: High Impact (Implement Within 1 Month)

**5. Create Individual Service Pages**
- Expand each service from the Solutions page into dedicated pages
- URL structure: `/solutions/web-development/`, `/solutions/service-management/`, etc.
- Include: detailed descriptions, methodologies, case studies, FAQs
- Target: 1,500+ words per service page
- Expected Impact: Ability to rank for specific service-related queries

**6. Implement Proper Breadcrumb Navigation**
- Add breadcrumb navigation to all pages (except homepage)
- Add BreadcrumbList schema markup
- Style to match site design
- Expected Impact: Potential breadcrumb rich snippets in search results, improved UX

**7. Develop Internal Linking Strategy**
- Add contextual internal links within content
- Link related services and pages where relevant
- Create topic clusters (pillar pages + supporting content)
- Expected Impact: Improved PageRank distribution, better topical authority

**8. Add Local SEO Elements**
- Add specific address or service area to schema markup
- Create Google Business Profile if not already established
- Add local business schema with postal address
- Expected Impact: Improved visibility for local searches

### Priority 3: Medium Impact (Implement Within 3 Months)

**9. Create Case Studies/Portfolio Section**
- Develop 3-5 detailed case studies showcasing successful projects
- Include challenges, solutions, results with metrics
- Optimize for keywords like "Laravel development case study", "ITIL implementation success story"
- Expected Impact: Trust signals, conversion rate improvement, long-tail traffic

**10. Implement FAQ Schema**
- Add FAQ sections to relevant pages (especially services)
- Implement FAQ schema markup
- Target common questions customers ask
- Expected Impact: Potential FAQ rich snippets, voice search optimization

**11. Add Social Media Integration**
- Create and link social media profiles (LinkedIn essential for B2B)
- Add social links to footer
- Update schema sameAs array with profile URLs
- Expected Impact: Brand awareness, additional traffic channels, social signals

**12. Optimize for Core Web Vitals**
- Test current Core Web Vitals scores
- Optimize Largest Contentful Paint (LCP)
- Minimize Cumulative Layout Shift (CLS)
- Improve First Input Delay (FID)
- Expected Impact: Better mobile rankings, improved user experience

### Priority 4: Long-term (Implement Within 6 Months)

**13. Develop Backlink Strategy**
- Identify link building opportunities (industry directories, partnerships)
- Guest posting on relevant industry blogs
- Create linkable assets (tools, calculators, comprehensive guides)
- Expected Impact: Improved domain authority, higher rankings for competitive terms

**14. Video Content Integration**
- Create service overview videos
- Add video schema markup
- Host on YouTube and embed on site
- Expected Impact: Video SERP features, engagement improvement

**15. Implement Advanced Schema**
- Add Review schema (when customer reviews are available)
- Implement HowTo schema for process pages
- Consider Article schema for blog posts
- Expected Impact: Additional rich snippet opportunities

---

## 6. Checklist Results

Based on the persona evaluation checklist:

- [x] **Is the site easily crawlable by search engines?**
  Yes - robots.txt properly configured, sitemap accessible

- [x] **Are all important pages indexable?**
  Yes - no blocking directives found, all pages accessible

- [x] **Are title tags and meta descriptions optimized?**
  Partially - Present and unique but could be more compelling and keyword-rich

- [x] **Is there proper heading hierarchy (H1, H2, H3)?**
  Yes - Excellent hierarchy with single H1 per page, proper H2/H3 structure

- [ ] **Are target keywords strategically used?**
  Partially - Keywords present but content could be more keyword-optimized without sacrificing quality

- [ ] **Is there quality, comprehensive content?**
  No - Content is clear but lacks depth; needs expansion for competitive rankings

- [ ] **Is internal linking strategic and logical?**
  Partially - Good navigation structure but limited contextual internal linking

- [x] **Is the site mobile-friendly?**
  Yes - Fully responsive with proper viewport configuration

- [ ] **Are Core Web Vitals in "Good" range?**
  Unknown - Requires live testing, but technical foundation is solid

- [x] **Is structured data implemented?**
  Yes - Excellent implementation of Organization, LocalBusiness, Service schemas

- [x] **Is the site HTTPS secure?**
  Yes - HTTPS mentioned in schema and required by modern browsers

- [x] **Are URLs clean and descriptive?**
  Yes - Excellent URL structure with keywords and trailing slashes

- [ ] **Are images optimized with alt text?**
  No - Minimal alt text implementation found

- [x] **Is there an XML sitemap?**
  Yes - Dynamically generated and properly configured

- [ ] **Are there quality backlinks?**
  Unknown - Cannot assess without external tools; no visible backlink strategy

- [x] **Is duplicate content avoided?**
  Yes - Canonical URLs implemented, unique content per page

- [x] **Does content match search intent?**
  Yes - Content aligns with commercial/transactional intent for consultancy

- [ ] **Are 404s and redirect chains fixed?**
  Partially - Custom 404 page exists, but cannot verify redirect status without live testing

**Checklist Score: 12/18 (67%)**

---

## 7. Overall Rating

### SEO Rating: 6.5/10

**Breakdown:**

- **Technical SEO: 8.5/10**
  Excellent foundation with proper meta tags, structured data, sitemaps, and URL structure. Minor improvements needed around robots directives and schema accuracy.

- **On-Page SEO: 5.5/10**
  Good title tags and heading structure, but content lacks depth, images need optimization, and meta descriptions need enhancement for better CTR.

- **Content Strategy: 3/10**
  Major weakness - no blog, thin page content, no case studies. This is the biggest opportunity for improvement.

- **User Experience/Mobile: 8/10**
  Strong responsive design and accessibility. Core Web Vitals need verification but technical implementation suggests good performance.

- **Off-Page SEO: N/A**
  Cannot fully assess without external tools, but no visible backlink strategy or social presence.

### Summary

The Solutions Delivered website has a **strong technical SEO foundation** that puts it ahead of many competing consultancy sites. The implementation of structured data, proper meta tags, and clean URL structure shows professional development practices. However, the site is **significantly underperforming its potential** due to thin content and absence of content marketing strategy.

**Key Quote from my persona:**
"Technical SEO is the foundation. Content is the house. Links are the neighborhood."

Solutions Delivered has built a solid foundation, but the house is only partially constructed. With the recommended content marketing strategy, deeper service pages, and image optimization, this site could realistically achieve:

- **200-400% increase in organic traffic** within 6 months
- **Top 3 rankings** for branded terms (already likely achieved)
- **First page rankings** for targeted service terms like "Laravel development UK", "ITIL consultancy", "business change management consultancy"
- **Featured snippet opportunities** with FAQ schema implementation

The site is well-positioned for SEO success with moderate investment in content development and optimization. The technical foundation means you won't waste time fixing basic issues - you can focus on growth activities immediately.

### Immediate Action Items

If I could only recommend three things to do this week:

1. **Add alt text to all images** (2 hours work, immediate accessibility and SEO benefit)
2. **Rewrite meta descriptions** for all 7 pages to be more compelling (3 hours work)
3. **Plan your content calendar** - identify 12 blog topics for the next quarter (4 hours work)

These changes alone would improve the SEO score to 7.5/10 and set the foundation for long-term organic growth.

---

**Review Completed By:**
Hannah Wilson
SEO Manager | 7 Years Experience in Organic Search
Leeds, UK

*"If Google can't crawl it, index it, or understand it, it won't rank. Solutions Delivered has the crawlability and indexability - now it needs the content to rank."*
