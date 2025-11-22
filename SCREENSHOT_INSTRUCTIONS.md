# Screenshot Capture Instructions

This project includes an automated Playwright script to capture comprehensive screenshots across all viewport sizes as recommended for mobile-first, WCAG-compliant design review.

## What Was Captured Successfully ✅

Due to resource constraints in the CI environment, we successfully captured **14 screenshots for iPhone SE (375×667)**:

### Mobile Screenshots (iPhone SE)
- ✅ Homepage (default + menu open)
- ✅ About page (default + menu open)
- ✅ Solutions page (default + menu open)
- ✅ How We Work page (default + menu open)
- ✅ Get Started page (default + menu open)
- ✅ Careers page (default + menu open)
- ✅ 404 Error page (default + menu open)

**Location:** `screenshots/mobile/iphone-se/`

## Running Locally (Recommended)

To capture the complete set of screenshots (63 total across all viewports), run this on your local machine with more resources:

### Prerequisites

```bash
npm install
```

The required dependencies (@playwright/test) are already in package.json.

### Install Playwright Browsers

```bash
npx playwright install chromium
```

### Start Your Development Server

```bash
# Option 1: Laravel dev server
php artisan serve

# Option 2: Or use your preferred method
npm run dev
```

### Run the Screenshot Script

```bash
# With local development server
APP_URL=http://localhost:8000 node capture-screenshots.mjs

# Or with production URL
APP_URL=https://solutionsdelivered.co.uk node capture-screenshots.mjs
```

## Expected Output

The script will capture:

### 📱 Mobile (3 devices × 7 pages × ~2 states = ~42 screenshots)
- iPhone SE (375×667)
- iPhone 12 Pro (390×844)
- iPhone 14 Pro Max (414×896)

**States captured:**
- Default state
- Mobile menu open

### 📱 Tablet (4 orientations × 7 pages = ~28 screenshots)
- iPad Mini Portrait (768×1024)
- iPad Air Portrait (834×1194)
- iPad Mini Landscape (1024×768)
- iPad Air Landscape (1194×834)

**States captured:**
- Default state
- Focus indicators (some pages)

### 💻 Desktop (2 sizes × 7 pages = ~14 screenshots)
- 1440×900
- 1920×1080

**States captured:**
- Default state
- Focus indicators
- Form validation errors (form pages)

### Pages Covered

1. Homepage (`/`)
2. About (`/about`)
3. Solutions (`/solutions`)
4. How We Work (`/how-we-work`)
5. Get Started (`/get-started`)
6. Careers (`/careers`)
7. 404 Error page (non-existent URL)

## Output

All screenshots are saved to:

```
screenshots/
├── mobile/
│   ├── iphone-se/
│   ├── iphone-12-pro/
│   └── iphone-14-pro-max/
├── tablet/
│   ├── ipad-mini/
│   ├── ipad-air/
│   ├── ipad-mini-landscape/
│   └── ipad-air-landscape/
├── desktop/
│   ├── desktop-1440/
│   └── desktop-1920/
├── screenshot-report.json (detailed JSON report)
└── SCREENSHOT_SUMMARY.md (human-readable summary)
```

## Customization

You can modify `capture-screenshots.mjs` to:

- Add/remove pages (edit the `pages` array)
- Change viewport sizes (edit the `viewports` object)
- Adjust interaction states captured
- Modify browser launch args for performance

## Troubleshooting

**Out of memory errors:**
- Close other applications
- Try capturing one device type at a time by commenting out devices in the script

**Page crashed errors:**
- Ensure your development server is running
- Try adding more browser args for stability
- Increase available system resources

**Timeout errors on forms:**
- The script automatically handles cookie consent
- If validation capture fails, screenshots of default states are still captured

## Review Checklist

Use the screenshots to verify:

- [ ] Mobile-first responsive design (375px → 768px → 1440px+)
- [ ] Touch targets ≥24×24px on mobile
- [ ] Focus indicators visible and clear
- [ ] Color contrast meets WCAG 2.2 AA (4.5:1)
- [ ] Text readable at all viewport sizes
- [ ] Forms accessible with clear labels
- [ ] Navigation usable on mobile
- [ ] Content properly stacked on mobile
- [ ] No horizontal scrolling
- [ ] Images and media responsive

## Next Steps

1. Run the script locally to capture complete coverage
2. Review screenshots against WCAG 2.2 requirements
3. Document any issues found
4. Create tickets for remediation
5. Repeat after fixes to verify

---

**Script created:** 2025-11-22
**Mobile screenshots captured:** 14
**Total expected:** 84+ (with all states)
