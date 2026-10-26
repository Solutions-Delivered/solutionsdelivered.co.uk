// Parity check: node scripts/parity.mjs <baseUrl> [liveOrigin]
// For every URL in the live sitemap, compares the same path on <baseUrl>:
// title, meta description, canonical, H1, JSON-LD types, image srcs and
// visible word count (within 1%).
const base = (process.argv[2] ?? '').replace(/\/$/, '');
const live = (process.argv[3] ?? 'https://solutionsdelivered.co.uk').replace(/\/$/, '');
if (!base) { console.error('usage: parity.mjs <baseUrl> [liveOrigin]'); process.exit(2); }

const get = async (url) => {
  const res = await fetch(url, { headers: { 'user-agent': 'parity-check' }, redirect: 'follow' });
  return { status: res.status, body: await res.text() };
};

const entities = { amp: '&', lt: '<', gt: '>', quot: '"', '#039': "'", '#39': "'", apos: "'", nbsp: ' ', pound: '£', copy: '©', mdash: '—', ndash: '–', hellip: '…', rsquo: '’', lsquo: '‘', ldquo: '“', rdquo: '”' };
const decode = (s) => s.replace(/&(#x?[0-9a-f]+|[a-z]+);/gi, (m, e) => {
  if (e[0] === '#') { const n = e[1].toLowerCase() === 'x' ? parseInt(e.slice(2), 16) : parseInt(e.slice(1), 10); return Number.isNaN(n) ? m : String.fromCodePoint(n); }
  return entities[e] ?? m;
});
const squash = (s) => decode(s).replace(/\s+/g, ' ').trim();
const meta = (html, re) => { const m = html.match(re); return m ? squash(m[1]) : null; };
const origin = (u) => u.replace(live, '').replace(base, '') || '/';

function extract(html) {
  const title = meta(html, /<title>([\s\S]*?)<\/title>/i);
  const description = meta(html, /<meta\s+name="description"\s+content="([^"]*)"/i);
  const canonical = meta(html, /<link\s+rel="canonical"\s+href="([^"]*)"/i);
  const h1 = meta(html, /<h1\b[^>]*>([\s\S]*?)<\/h1>/i)?.replace(/<[^>]+>/g, '') ?? null;
  const types = [];
  for (const [, j] of html.matchAll(/<script type="application\/ld\+json">([\s\S]*?)<\/script>/g)) {
    try { const o = JSON.parse(j); for (const t of [].concat(o['@type'])) types.push(t); } catch { types.push('INVALID_JSON'); }
  }
  const imgs = new Set();
  for (const [, tag] of html.matchAll(/<(?:img|source)\b([^>]*)>/gi)) {
    for (const [, k, v] of tag.matchAll(/\s(src|srcset)="([^"]*)"/gi)) {
      for (const part of v.split(',')) imgs.add(origin(part.trim().split(/\s+/)[0]));
    }
  }
  const body = html.match(/<body[\s\S]*<\/body>/i)?.[0] ?? html;
  const text = squash(body
    .replace(/<!--[\s\S]*?-->/g, ' ')
    .replace(/<(script|style|noscript|svg|template)\b[\s\S]*?<\/\1>/gi, ' ')
    .replace(/<[^>]+>/g, ' '));
  return { title, description, canonical, h1, types: types.sort().join(','), imgs: [...imgs].sort().join('\n'), words: text ? text.split(' ').length : 0 };
}

const sm = await get(`${live}/sitemap.xml`);
const urls = [...sm.body.matchAll(/<loc>\s*([^<\s]+)\s*<\/loc>/g)].map((m) => m[1]);
console.log(`live sitemap: ${urls.length} URLs; comparing against ${base}`);

let bad = 0;
for (const u of urls) {
  const p = u.replace(live, '') || '/';
  const [a, b] = await Promise.all([get(u), get(base + p)]);
  const diffs = [];
  if (a.status !== 200) diffs.push(`live status ${a.status}`);
  if (b.status !== 200) diffs.push(`base status ${b.status}`);
  if (!diffs.length) {
    const x = extract(a.body), y = extract(b.body);
    for (const k of ['title', 'description', 'canonical', 'h1', 'types', 'imgs']) {
      if (x[k] !== y[k]) diffs.push(`${k}:\n      live: ${JSON.stringify(x[k])}\n      base: ${JSON.stringify(y[k])}`);
    }
    const drift = Math.abs(x.words - y.words) / Math.max(x.words, 1);
    if (drift > 0.01) diffs.push(`words: live ${x.words}, base ${y.words} (${(drift * 100).toFixed(1)}%)`);
  }
  if (diffs.length) { bad++; console.log(`DIFF ${p}\n    ${diffs.join('\n    ')}`); } else console.log(`ok   ${p}`);
}
console.log(`\n${urls.length - bad}/${urls.length} pages match`);
process.exit(bad ? 1 : 0);
