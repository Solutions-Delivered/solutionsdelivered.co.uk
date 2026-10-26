import { createHash } from 'node:crypto';
import fs from 'node:fs';
import path from 'node:path';
import { execFileSync } from 'node:child_process';
import { fileURLToPath } from 'node:url';

const SITE = 'https://solutionsdelivered.co.uk';

// Route table: Laravel route name -> path.
const ROUTES = {
  home: '/',
  'foundations-os': '/foundations-os',
  'ai-foundations': '/ai-foundations',
  'how-it-works': '/how-it-works',
  'outsourced-it-director': '/outsourced-it-director',
  consultancy: '/consultancy',
  'guides.index': '/guides',
  about: '/about',
  contact: '/contact',
  privacy: '/privacy',
  terms: '/terms',
};

function absUrl(p) {
  return p === '/' ? SITE : SITE + p;
}

export default function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy({ public: '.' });
  eleventyConfig.setFreezeReservedData(false);

  eleventyConfig.addGlobalData('buildDate', () => {
    const d = new Date();
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    return { year: d.getUTCFullYear(), long: `${d.getUTCDate()} ${months[d.getUTCMonth()]} ${d.getUTCFullYear()}` };
  });

  // Nunjucks globals mirroring the Blade helpers the templates used.
  eleventyConfig.addNunjucksGlobal('route', (name, query) => {
    let p;
    if (name === 'guides.show') {
      p = `/guides/${query}`;
      return absUrl(p);
    }
    p = ROUTES[name];
    if (p === undefined) throw new Error(`Unknown route: ${name}`);
    let url = absUrl(p);
    if (query && Object.keys(query).length) {
      url += '?' + Object.entries(query).map(([k, v]) => `${encodeURIComponent(k)}=${encodeURIComponent(v)}`).join('&');
    }
    return url;
  });
  eleventyConfig.addNunjucksGlobal('asset', (p) => '/' + String(p).replace(/^\//, ''));
  eleventyConfig.addNunjucksGlobal('abs', (p) => `${SITE}/${String(p).replace(/^\//, '')}`);
  eleventyConfig.addNunjucksGlobal('ld', (obj) => JSON.stringify(obj, null, 4).replace(/<\/script/gi, '<\\/script'));
  eleventyConfig.addNunjucksGlobal('compact', (arr) => arr.filter(Boolean));
  eleventyConfig.addNunjucksGlobal('faq_entities', (faqs) =>
    faqs.map((f) => ({ '@type': 'Question', name: f.question, acceptedAnswer: { '@type': 'Answer', text: f.answer } })),
  );
  eleventyConfig.addNunjucksGlobal('package_offers', (packages) =>
    Object.values(packages).map((pkg) => {
      const offer = {
        '@type': 'Offer',
        name: pkg.name,
        description: pkg.outcome,
        itemOffered: { '@type': 'Service', name: pkg.name, description: pkg.outcome },
      };
      if (pkg.price !== null && pkg.price !== undefined) {
        offer.price = String(pkg.price);
        offer.priceCurrency = pkg.currency ?? 'GBP';
      }
      return offer;
    }),
  );
  eleventyConfig.addFilter('breadcrumbItems', (items) =>
    items.map((item, i) => ({ '@type': 'ListItem', position: i + 1, name: item.name, item: item.url ?? null })),
  );
  // lastmod: date of the last commit touching the page source, else the build date.
  const root = path.dirname(fileURLToPath(import.meta.url));
  eleventyConfig.addFilter('lastmod', (name) => {
    try {
      const out = execFileSync('git', ['log', '-1', '--format=%cs', '--', `static-src/pages/${name}.njk`], { cwd: root, encoding: 'utf8', stdio: ['ignore', 'pipe', 'ignore'] }).trim();
      if (out) return out;
    } catch { /* fall through */ }
    return new Date().toISOString().slice(0, 10);
  });
  eleventyConfig.addFilter('packageNames', (pk) => Object.fromEntries(Object.entries(pk).map(([k, v]) => [k, v.name])));
  eleventyConfig.addFilter('byCluster', (guides, slug) => guides.filter((g) => g.cluster === slug));
  eleventyConfig.addFilter('numberFormat', (n) => Number(n).toLocaleString('en-GB'));
  eleventyConfig.addFilter('pad2', (n) => String(n).padStart(2, '0'));
  eleventyConfig.addFilter('json', (o) => JSON.stringify(o, null, 1));
  eleventyConfig.addFilter('absUrl', absUrl);

  return {
    dir: { input: 'pages', includes: '../_includes', data: '../_data', output: 'dist' },
    templateFormats: ['njk'],
    markdownTemplateEngine: 'njk',
    htmlTemplateEngine: 'njk',
  };
}
