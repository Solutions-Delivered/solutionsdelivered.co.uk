# Social Media Manager Review
**Reviewer:** Jake Morrison, Social Media Manager
**Date:** November 20, 2025
**Website:** Solutions Delivered (solutionsdelivered.co.uk)

---

## 1. Executive Summary

As a social media manager, I'm frustrated by what I see here. The Solutions Delivered website has solid technical foundations for social sharing - the Open Graph tags are implemented correctly, the Twitter Cards are configured properly, and there's even a perfectly-sized og-image. But that's where the good news ends.

This website feels like it was built in a vacuum, completely disconnected from any social media strategy. There are no social share buttons, no links to social profiles, no blog content to promote, and no way to track social campaigns. It's like they built a beautiful car but forgot to add the steering wheel.

If I were running social campaigns for this brand, I'd be severely limited. Where do I send traffic? How do I track conversions? What content do I share beyond the basic service pages? The technical setup suggests someone understood social media requirements at some point, but the execution suggests social was an afterthought.

**Bottom line:** Good technical implementation, but zero social media integration or strategy. This site needs significant work before it can support an effective social media presence.

---

## 2. Strengths

### Technical Implementation
- **Open Graph Tags:** Properly implemented with all essential properties (title, description, type, URL, image, locale)
- **Twitter Cards:** Configured correctly with summary_large_image card type
- **OG Image:** Exists and is properly sized (1200x630px) - will display correctly when shared
- **Unique Meta Descriptions:** Each page has unique, well-written meta descriptions that work for social sharing
- **Schema.org Markup:** Structured data implemented for Organization and LocalBusiness
- **Canonical URLs:** Properly set on all pages
- **Sitemap:** Present and properly structured for search engines

### Content Structure
- **Clear Headlines:** Headlines are compelling and would work well in social posts
- **Visual Hierarchy:** Content is well-structured with clear sections
- **Mobile Responsive:** The site appears mobile-optimized, which is crucial for social traffic
- **Professional Branding:** Consistent blue color scheme (#198fd9) that could translate well to social profiles

### Performance
- **Clean Code:** The HTML structure is clean and should load quickly
- **SVG Assets:** Using SVG for logos and icons means crisp display when thumbnails are generated

---

## 3. Weaknesses

### Critical Issues

#### No Social Media Integration
This is the biggest problem. There are **zero** social media links anywhere on the website. I checked:
- Footer: No social media icons or links
- Header: No social media links
- Contact page: No social media contact options
- About page: No "Follow us" or social proof sections

If this company has social media profiles, visitors have no way to find them. This is a massive missed opportunity for community building and engagement.

#### No Social Share Buttons
There are no social share buttons on any page. This means:
- Visitors can't easily share content they find valuable
- We're missing out on organic amplification
- There's no easy way for readers to share careers page with their networks
- Services pages can't be easily shared with decision-makers

#### No Content for Social Promotion
The website consists entirely of static pages:
- No blog or news section
- No case studies
- No client success stories
- No resources or downloadable content
- No videos or visual content

What am I supposed to share on social media? I can post about the services once, but then what? Social media requires consistent content, and this site provides none.

#### No Campaign Tracking
- No UTM parameters visible in any links
- No obvious way to track social traffic vs. other sources
- No landing pages specifically designed for social campaigns
- Can't measure ROI from social media efforts effectively

#### Missing Social Proof
- No social follower counts displayed
- No social media feed integration
- No testimonials with social profile links
- No "As seen on" or media mentions
- Empty `sameAs` array in Schema.org markup (should contain social profile URLs)

---

## 4. Specific Issues

### Open Graph & Meta Tags

**What's Working:**
```html
<!-- Good: Properly structured OG tags -->
<meta property="og:title" content="Solutions Delivered - Delivering Solutions is in Our DNA">
<meta property="og:description" content="...">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('og-image.png') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Solutions Delivered">
<meta property="og:locale" content="en_GB">
```

**What's Missing:**
- No `og:image:type` specified (should be "image/png")
- No article-specific Open Graph tags for blog posts (because there are no blog posts)
- No `og:see_also` tags pointing to social profiles
- No Facebook App ID for Facebook Insights
- Generic og-image for all pages - would be better to have page-specific images

### Twitter Cards

**What's Working:**
```html
<!-- Good: Basic Twitter Card implementation -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="...">
<meta name="twitter:description" content="...">
<meta name="twitter:image" content="{{ asset('og-image.png') }}">
```

**What's Missing:**
- No `twitter:site` tag (should be @solutionsdelivered or whatever their handle is)
- No `twitter:creator` tag for attribution
- No Twitter domain verification
- Same generic image for all pages

### Schema.org Markup

**Critical Issue:**
```json
"sameAs": []
```
This empty array should contain URLs to the company's social media profiles. This is a missed opportunity for search engines and social platforms to connect the dots.

**Should be something like:**
```json
"sameAs": [
    "https://www.linkedin.com/company/solutions-delivered",
    "https://twitter.com/solutionsdelivered",
    "https://facebook.com/solutionsdelivered"
]
```

### Mobile Experience
The site appears to be mobile responsive, which is crucial since **social media traffic is predominantly mobile**. However, without actually seeing it on mobile devices, I can't verify:
- Touch target sizes for buttons
- Loading speed on mobile networks
- How the og-image displays in various social media apps

### Page-Specific Issues

#### Homepage (/)
- Good hero section, but where's the social proof?
- No "Follow us" section
- No embedded social feeds showing recent activity
- Trust indicators are good but could include social follower counts

#### Solutions Page
- Great content that's worth sharing, but no share buttons
- Would benefit from case study content with shareable graphics
- No testimonials with social attribution

#### Get Started Page (Contact)
- Good trust indicators
- Missing social media contact options
- Could include "or reach out to us on LinkedIn" options

#### Careers Page
- Excellent content that employees could share with their networks
- **No share buttons to help amplify job postings**
- Missing social proof of company culture
- No links to LinkedIn company page

---

## 5. Recommendations

### Immediate Actions (Week 1)

1. **Add Social Media Links**
   - Add social media icons to the footer linking to company profiles
   - If social profiles don't exist, create them FIRST
   - Consider adding social links to the header as well

2. **Implement Social Share Buttons**
   - Add share buttons to key pages (especially Careers and Solutions)
   - Minimum: LinkedIn, Twitter/X, Facebook
   - Use native share buttons or a lightweight sharing plugin
   - Pre-populate share text with compelling copy

3. **Update Schema.org Markup**
   - Populate the `sameAs` array with social profile URLs
   - Add social profile URLs to the Organization schema

4. **Create Page-Specific OG Images**
   - Design unique og-images for Solutions, About, and Careers pages
   - Include page-specific text overlays
   - Keep consistent branding

### Short-Term Actions (Month 1)

5. **Add Twitter/X Attribution**
   - Add `twitter:site` and `twitter:creator` meta tags
   - Register for Twitter domain verification

6. **Implement UTM Tracking**
   - Create UTM parameters for all social media campaigns
   - Document UTM naming conventions
   - Set up Google Analytics to track social traffic

7. **Add Social Proof Elements**
   - Display social follower counts (if substantial)
   - Add "Follow us" section to footer or sidebar
   - Include social testimonials/reviews

8. **Create Landing Pages for Social Campaigns**
   - Design dedicated landing pages for LinkedIn campaigns
   - Create specific pages for different audience segments
   - Include UTM parameters in all campaign links

### Medium-Term Actions (Months 2-3)

9. **Launch a Blog/Content Hub**
   - Create a blog section for shareable content
   - Plan content calendar aligned with social strategy
   - Write case studies, how-to guides, industry insights
   - Design quote cards and infographics

10. **Integrate Social Feeds**
    - Embed LinkedIn company feed on homepage or footer
    - Show social proof of active community engagement
    - Could use Twitter widget or LinkedIn plugin

11. **Build Visual Content Library**
    - Create templates for social media graphics
    - Design infographics about services
    - Develop case study graphics
    - Create shareable quote cards

12. **Implement Social Proof**
    - Add client testimonials with LinkedIn profile links
    - Include "As featured in" section if applicable
    - Show certifications and partnerships

### Long-Term Actions (Months 3-6)

13. **Develop Campaign-Specific Landing Pages**
    - Create dedicated pages for major social campaigns
    - Design A/B testable layouts
    - Implement conversion tracking

14. **Create Shareable Resources**
    - Develop downloadable guides or whitepapers
    - Create tools or calculators
    - Build templates or checklists
    - Gate content for lead generation

15. **Add Interactive Elements**
    - Implement social login options (if adding member area)
    - Add social commenting system (if adding blog)
    - Create shareable quizzes or assessments

16. **Optimize for Social SEO**
    - Research trending topics in the industry
    - Create content targeting social media search
    - Build out topic clusters for authority

---

## 6. Checklist Results

Based on the persona evaluation checklist:

### Social Media Optimization
- [ ] **Are Open Graph tags properly implemented?** ✅ YES - Well implemented
- [ ] **Are Twitter Cards configured?** ✅ YES - Basic implementation present
- [ ] **Is there shareable content worth promoting?** ❌ NO - Only static pages
- [ ] **Are social share buttons present?** ❌ NO - Completely missing
- [ ] **Do images display well on social platforms?** ⚠️ PARTIAL - og-image exists but generic
- [ ] **Is the mobile experience excellent?** ⚠️ UNKNOWN - Appears responsive but needs testing
- [ ] **Is UTM tracking in place?** ❌ NO - No evidence of tracking
- [ ] **Is social proof displayed?** ❌ NO - No social proof anywhere
- [ ] **Are headlines compelling?** ✅ YES - Headlines are strong
- [ ] **Are there landing pages for social campaigns?** ❌ NO - No campaign pages
- [ ] **Does content load quickly?** ⚠️ LIKELY - Clean code suggests good performance
- [ ] **Are CTAs clear for social visitors?** ⚠️ PARTIAL - Good CTAs but not social-specific
- [ ] **Is there visual content to share?** ❌ NO - No graphics, infographics, or visual assets
- [ ] **Can social campaigns be tracked?** ❌ NO - No tracking infrastructure
- [ ] **Will social traffic convert?** ⚠️ MAYBE - Good contact form but no social-specific paths

**Score: 2.5/15** (Passing marks for OG tags, Twitter Cards, and headlines only)

---

## 7. Overall Rating

**3.5 out of 10**

### Breakdown:
- **Technical Setup (OG/Twitter):** 8/10 - Well implemented but missing some details
- **Social Integration:** 0/10 - Completely absent
- **Shareable Content:** 1/10 - Only basic service pages
- **Tracking & Analytics:** 0/10 - No social attribution
- **Social Proof:** 0/10 - None present
- **Mobile Experience:** 7/10 - Appears responsive (needs verification)
- **Campaign Support:** 0/10 - No infrastructure for social campaigns

### Why 3.5/10?

I'm giving credit for the technical implementation of Open Graph and Twitter Cards - whoever set those up knew what they were doing. The og-image exists and is properly sized, which means when someone DOES share a link (manually), it will look decent.

However, that's where the positives end. This website is fundamentally not designed to support social media marketing. It's a static brochure site with no integration points for social channels, no content to promote, and no way to track campaign performance.

**Critical blockers:**
- Can't build community (no social links)
- Can't amplify content (no share buttons)
- Can't sustain engagement (no blog/content)
- Can't measure ROI (no tracking)
- Can't provide social proof (no integration)

### Comparison to Industry Standards

For a B2B consultancy in 2025, this is well below par. Competitors likely have:
- Active social media presence with site integration
- Regular blog content for promotion
- Case studies with social share buttons
- LinkedIn company page embedded on site
- Clear social CTAs throughout the journey
- Campaign tracking and attribution

### What Would Make This a 10/10?

A perfect social media-optimized site would have:
- Social links prominently displayed
- Share buttons on all shareable content
- Active blog with weekly posts
- Page-specific og-images
- Full UTM tracking infrastructure
- Social proof integrated throughout
- Embedded social feeds
- Campaign-specific landing pages
- Visual content library
- Lead magnets for social campaigns
- Social login options
- Community features

---

## Personal Notes

Look, I get it. This is a consultancy website, not Buzzfeed. But social media isn't optional anymore, even for B2B services. LinkedIn is where your target audience hangs out, and you're making it unnecessarily difficult for them to engage with your brand.

The frustrating part is that someone on the team clearly understands social media basics - the Open Graph implementation proves that. But understanding technical requirements isn't the same as having a social media strategy.

**Here's what concerns me most:**

1. **No social links** = You might not even have social profiles. If you do, why aren't you showcasing them?

2. **No blog** = What am I supposed to post about? I can share your homepage once, then what? Social media needs content fuel.

3. **No share buttons** = You're depending on people manually copying and pasting URLs. That's not going to happen. Make it easy.

4. **No tracking** = How will you know if social media is driving leads? How will you justify the budget?

5. **Empty sameAs array** = This tells me social media wasn't part of the site planning process. It was literally left as an empty array.

**My advice to the stakeholders:**

If you're planning to do ANY social media marketing, you need to address these issues before spending a penny on paid social or content creation. Otherwise, you're driving traffic to a site that's not designed to capture, track, or convert that traffic effectively.

Start with the immediate actions in my recommendations. Get your social profiles linked, add share buttons, and set up basic tracking. Then plan for content creation - without content, your social channels will die.

The good news? The technical foundation is there. You're not starting from zero. But you need to shift from thinking about this as a website to thinking about it as part of an integrated digital ecosystem where social plays a crucial role.

**Bottom line:** Fix the low-hanging fruit first (social links, share buttons, tracking), then commit to a content strategy. Without both, your social media efforts will struggle regardless of how much you invest in ads or community management.

---

**Jake Morrison**
Social Media Manager
Brighton, UK
