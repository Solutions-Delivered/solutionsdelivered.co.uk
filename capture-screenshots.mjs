#!/usr/bin/env node

import { chromium } from '@playwright/test';
import { mkdir, writeFile } from 'fs/promises';
import { join } from 'path';

// Configuration
const BASE_URL = process.env.APP_URL || 'http://localhost';
const OUTPUT_DIR = './screenshots';

// Viewport configurations
const viewports = {
  mobile: [
    { name: 'iPhone SE', width: 375, height: 667 },
    { name: 'iPhone 12 Pro', width: 390, height: 844 },
    { name: 'iPhone 14 Pro Max', width: 414, height: 896 },
  ],
  tablet: [
    { name: 'iPad Mini', width: 768, height: 1024 },
    { name: 'iPad Air', width: 834, height: 1194 },
    { name: 'iPad Mini Landscape', width: 1024, height: 768 },
    { name: 'iPad Air Landscape', width: 1194, height: 834 },
  ],
  desktop: [
    { name: 'Desktop 1440', width: 1440, height: 900 },
    { name: 'Desktop 1920', width: 1920, height: 1080 },
  ],
};

// Pages to capture
const pages = [
  { url: '/', name: 'homepage' },
  { url: '/about', name: 'about' },
  { url: '/solutions', name: 'solutions' },
  { url: '/how-we-work', name: 'how-we-work' },
  { url: '/get-started', name: 'get-started' },
  { url: '/careers', name: 'careers' },
  { url: '/this-page-does-not-exist', name: '404-error' },
];

// Elements to test for interaction states
const interactiveElements = {
  buttons: 'button, .btn, a[class*="button"]',
  links: 'a[href]',
  formInputs: 'input, textarea, select',
};

// Helper function to sanitize filenames
function sanitizeFilename(str) {
  return str.replace(/[^a-z0-9-_]/gi, '-').toLowerCase();
}

// Helper function to create directory structure
async function ensureDir(path) {
  try {
    await mkdir(path, { recursive: true });
  } catch (error) {
    if (error.code !== 'EEXIST') throw error;
  }
}

// Capture screenshot with metadata
async function captureScreenshot(page, filepath, metadata) {
  await page.screenshot({ path: filepath, fullPage: true });
  console.log(`✅ Captured: ${filepath}`);
  return { filepath, ...metadata };
}

// Main screenshot capture function
async function captureAllScreenshots() {
  const report = {
    timestamp: new Date().toISOString(),
    baseUrl: BASE_URL,
    screenshots: [],
  };

  console.log('🚀 Starting screenshot capture...\n');

  try {
    for (const [deviceType, devices] of Object.entries(viewports)) {
      console.log(`\n📱 Capturing ${deviceType} screenshots...`);

      // Launch a new browser for each device type to prevent resource exhaustion
      const browser = await chromium.launch({
        headless: true,
        args: [
          '--disable-dev-shm-usage',
          '--disable-gpu',
          '--no-sandbox',
          '--disable-setuid-sandbox',
          '--disable-accelerated-2d-canvas',
        ],
      });

      for (const viewport of devices) {
        const context = await browser.newContext({
          viewport: { width: viewport.width, height: viewport.height },
        });

        const page = await context.newPage();

        for (const pageConfig of pages) {
          const url = `${BASE_URL}${pageConfig.url}`;
          const deviceDir = join(OUTPUT_DIR, deviceType, sanitizeFilename(viewport.name));
          await ensureDir(deviceDir);

          try {
            // Navigate to page
            await page.goto(url, { waitUntil: 'networkidle' });

            // Wait for any animations to complete
            await page.waitForTimeout(1000);

            // Dismiss cookie consent if present
            try {
              const cookieButton = await page.locator('button:has-text("Accept"), button:has-text("Decline"), [class*="cookie"] button').first();
              if (await cookieButton.count() > 0 && await cookieButton.isVisible()) {
                await cookieButton.click({ timeout: 2000 });
                await page.waitForTimeout(500);
              }
            } catch (e) {
              // Cookie consent not found or already dismissed, continue
            }

            // Capture default state
            const filename = `${pageConfig.name}.png`;
            const filepath = join(deviceDir, filename);
            const metadata = {
              page: pageConfig.name,
              url: pageConfig.url,
              device: viewport.name,
              deviceType,
              viewport: `${viewport.width}x${viewport.height}`,
              state: 'default',
            };

            report.screenshots.push(
              await captureScreenshot(page, filepath, metadata)
            );

            // Capture mobile navigation menu (mobile only)
            if (deviceType === 'mobile') {
              const menuButton = await page.locator('[aria-label*="menu" i], button:has-text("Menu"), .menu-toggle').first();
              if (await menuButton.count() > 0) {
                await menuButton.click();
                await page.waitForTimeout(500);

                const menuFilepath = join(deviceDir, `${pageConfig.name}-menu-open.png`);
                report.screenshots.push(
                  await captureScreenshot(page, menuFilepath, {
                    ...metadata,
                    state: 'menu-open',
                  })
                );
              }
            }

            // Capture form validation states (on form pages)
            if (pageConfig.name === 'get-started' || pageConfig.name === 'careers') {
              // Try to submit form without filling to trigger validation
              const submitButton = await page.locator('button[type="submit"], input[type="submit"]').first();
              if (await submitButton.count() > 0) {
                await submitButton.click();
                await page.waitForTimeout(500);

                const errorFilepath = join(deviceDir, `${pageConfig.name}-validation-error.png`);
                report.screenshots.push(
                  await captureScreenshot(page, errorFilepath, {
                    ...metadata,
                    state: 'validation-error',
                  })
                );
              }
            }

            // Capture focus states (desktop/tablet only for clarity)
            if (deviceType !== 'mobile') {
              const firstFocusable = await page.locator('a, button, input, select, textarea').first();
              if (await firstFocusable.count() > 0) {
                await firstFocusable.focus();
                await page.waitForTimeout(300);

                const focusFilepath = join(deviceDir, `${pageConfig.name}-focus-state.png`);
                report.screenshots.push(
                  await captureScreenshot(page, focusFilepath, {
                    ...metadata,
                    state: 'focus-indicator',
                  })
                );
              }
            }

          } catch (error) {
            console.error(`❌ Error capturing ${pageConfig.name} on ${viewport.name}:`, error.message);
            report.screenshots.push({
              page: pageConfig.name,
              device: viewport.name,
              error: error.message,
            });
          }
        }

        await context.close();
      }

      await browser.close();
      console.log(`✨ Completed ${deviceType} screenshots`);
    }

    // Generate report
    const reportPath = join(OUTPUT_DIR, 'screenshot-report.json');
    await writeFile(reportPath, JSON.stringify(report, null, 2));
    console.log(`\n📊 Report generated: ${reportPath}`);

    // Generate summary
    const successCount = report.screenshots.filter(s => !s.error).length;
    const errorCount = report.screenshots.filter(s => s.error).length;

    console.log('\n✨ Screenshot Capture Complete!');
    console.log(`   Total screenshots: ${report.screenshots.length}`);
    console.log(`   Successful: ${successCount}`);
    console.log(`   Errors: ${errorCount}`);
    console.log(`   Output directory: ${OUTPUT_DIR}`);

    // Generate markdown summary
    const markdownSummary = generateMarkdownSummary(report);
    const summaryPath = join(OUTPUT_DIR, 'SCREENSHOT_SUMMARY.md');
    await writeFile(summaryPath, markdownSummary);
    console.log(`   Summary: ${summaryPath}\n`);

  } catch (error) {
    console.error('Error during screenshot capture:', error);
    throw error;
  }
}

// Generate markdown summary
function generateMarkdownSummary(report) {
  const { screenshots } = report;
  const successful = screenshots.filter(s => !s.error);
  const failed = screenshots.filter(s => s.error);

  let markdown = `# Screenshot Capture Summary\n\n`;
  markdown += `**Generated:** ${new Date(report.timestamp).toLocaleString()}\n`;
  markdown += `**Base URL:** ${report.baseUrl}\n\n`;

  markdown += `## Statistics\n\n`;
  markdown += `- Total Screenshots: ${screenshots.length}\n`;
  markdown += `- Successful: ${successful.length}\n`;
  markdown += `- Failed: ${failed.length}\n\n`;

  // Group by device type
  const byDeviceType = successful.reduce((acc, shot) => {
    if (!acc[shot.deviceType]) acc[shot.deviceType] = [];
    acc[shot.deviceType].push(shot);
    return acc;
  }, {});

  markdown += `## Screenshots by Device Type\n\n`;

  for (const [deviceType, shots] of Object.entries(byDeviceType)) {
    markdown += `### ${deviceType.charAt(0).toUpperCase() + deviceType.slice(1)}\n\n`;
    markdown += `Total: ${shots.length} screenshots\n\n`;

    // Group by page
    const byPage = shots.reduce((acc, shot) => {
      if (!acc[shot.page]) acc[shot.page] = [];
      acc[shot.page].push(shot);
      return acc;
    }, {});

    for (const [page, pageShots] of Object.entries(byPage)) {
      markdown += `#### ${page}\n\n`;
      for (const shot of pageShots) {
        markdown += `- \`${shot.viewport}\` - ${shot.device} - ${shot.state}\n`;
        markdown += `  - ![${shot.device}](${shot.filepath.replace('./screenshots/', './')})\n\n`;
      }
    }
  }

  if (failed.length > 0) {
    markdown += `## Errors\n\n`;
    for (const shot of failed) {
      markdown += `- **${shot.page}** on **${shot.device}**: ${shot.error}\n`;
    }
  }

  markdown += `\n---\n\n`;
  markdown += `## Viewport Coverage\n\n`;
  markdown += `### Mobile\n`;
  markdown += `- iPhone SE (375×667)\n`;
  markdown += `- iPhone 12 Pro (390×844)\n`;
  markdown += `- iPhone 14 Pro Max (414×896)\n\n`;
  markdown += `### Tablet\n`;
  markdown += `- iPad Mini Portrait (768×1024)\n`;
  markdown += `- iPad Air Portrait (834×1194)\n`;
  markdown += `- iPad Mini Landscape (1024×768)\n`;
  markdown += `- iPad Air Landscape (1194×834)\n\n`;
  markdown += `### Desktop\n`;
  markdown += `- 1440×900\n`;
  markdown += `- 1920×1080\n\n`;

  markdown += `## States Captured\n\n`;
  markdown += `- ✅ Default state (all pages, all viewports)\n`;
  markdown += `- ✅ Mobile navigation menu (mobile only)\n`;
  markdown += `- ✅ Form validation errors (form pages)\n`;
  markdown += `- ✅ Focus indicators (desktop/tablet)\n\n`;

  return markdown;
}

// Run the script
captureAllScreenshots().catch(console.error);
