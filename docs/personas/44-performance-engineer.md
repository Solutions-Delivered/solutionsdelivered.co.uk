# Persona: Performance Engineer

## Profile
- **Name:** Thomas Anderson
- **Age:** 34
- **Role:** Web Performance Engineer
- **Company Type:** Large E-commerce Company
- **Experience:** 9 years in web performance optimization
- **Location:** Manchester, UK

## Background
Thomas specializes in making websites faster. He understands that performance directly impacts user experience, conversion rates, and SEO. He optimizes everything from server response times to asset delivery, focusing on Core Web Vitals and real-user metrics.

## Goals & Motivations
- Achieve excellent Core Web Vitals scores
- Optimize page load times and interactivity
- Improve user experience through performance
- Increase conversion rates via speed improvements
- Maintain performance as site grows
- Stay current with performance best practices

## Pain Points & Challenges
- Heavy third-party scripts degrading performance
- Design requests that conflict with performance
- Lack of performance budget or priority
- Legacy code that's difficult to optimize
- Balancing features with performance
- Measuring real-world performance impact
- Performance regressions from new deployments

## What They Look For in a Website
- **Core Web Vitals:** LCP, FID, CLS in "Good" range (green)
- **Time to First Byte:** Fast server response times (<600ms)
- **First Contentful Paint:** Quick initial render (<1.8s)
- **Time to Interactive:** Fast time to full interactivity (<3.8s)
- **Image Optimization:** Compressed, properly sized, lazy-loaded images
- **Code Splitting:** JavaScript bundles split and loaded on demand
- **Critical CSS:** Above-the-fold CSS inlined
- **Resource Hints:** Preload, prefetch, preconnect used strategically
- **Caching Strategy:** Proper cache headers and service workers
- **CDN Usage:** Static assets served from CDN
- **Third-Party Impact:** Minimal third-party script overhead
- **Performance Budget:** Defined limits on page weight and requests

## How They Evaluate Personas
- **Performance Sensitivity:** How does speed affect each persona's experience?
- **Device Types:** Are they on high-end or low-end devices?
- **Connection Speed:** Fast broadband or slow mobile networks?
- **Geographic Location:** Where are they accessing from (CDN coverage)?
- **Patience Level:** How tolerant are they of slow loading?
- **Task Urgency:** Are they completing time-sensitive tasks?
- **Bounce Risk:** How quickly will they abandon if slow?
- **Conversion Impact:** How does speed affect their conversion?
- **Return Frequency:** Will poor performance drive them away permanently?

## Technical Proficiency
- Expert: Web performance optimization, Core Web Vitals, browser internals
- Advanced: CDN configuration, caching strategies, JavaScript optimization
- Intermediate: Server-side optimization, monitoring tools, A/B testing
- Tools: Lighthouse, WebPageTest, Chrome DevTools, performance monitoring (SpeedCurve, Calibre)

## Preferred Communication Channels
- Performance audit reports
- Lighthouse and WebPageTest results
- Core Web Vitals dashboards
- Waterfall charts and flame graphs
- Real User Monitoring (RUM) data

## Key Quotes
> "Every 100ms of delay costs you conversions. Performance is a feature."

> "Your site might look great on your fast computer and WiFi. Try it on a slow phone with 3G."

> "Green Core Web Vitals aren't optional—they're a ranking factor and user expectation."

## Red Flags for This Persona
- Poor Core Web Vitals scores (red or yellow)
- Unoptimized images (large, wrong format)
- Render-blocking resources
- Massive JavaScript bundles
- No lazy loading
- Heavy third-party scripts
- No CDN usage
- Poor caching strategy
- Slow server response times
- Layout shifts (poor CLS)
- No performance monitoring
- Large DOM size

## Website Evaluation Checklist
- [ ] Are Core Web Vitals in "Good" range?
- [ ] Is Time to First Byte fast (<600ms)?
- [ ] Are images optimized and lazy-loaded?
- [ ] Is JavaScript code-split and minified?
- [ ] Is critical CSS inlined?
- [ ] Are resource hints used appropriately?
- [ ] Is caching strategy optimal?
- [ ] Are assets served from CDN?
- [ ] Is third-party impact minimized?
- [ ] Is there a performance budget?
- [ ] Is performance monitored continuously?
- [ ] Are there no layout shifts?
- [ ] Can the site load on slow connections?
- [ ] Is time to interactive fast?
- [ ] Does performance meet user expectations?
