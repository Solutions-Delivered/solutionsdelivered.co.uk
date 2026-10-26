// Port of GuideRepository / GuideMarkdownParser / Guide.
import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import matter from 'gray-matter';
import MarkdownIt from 'markdown-it';
import Token from 'markdown-it/lib/token.mjs';

const dir = path.join(path.dirname(fileURLToPath(import.meta.url)), '..', '..', 'content', 'guides');

const md = new MarkdownIt({ html: true, linkify: true, typographer: false });

// League HeadingPermalink: id "content-<slug>", symbol after the heading text.
function slugify(text) {
  return text
    .toLowerCase()
    .replace(/['’]/g, '')
    .replace(/[^\p{L}\p{Nd}]+/gu, '-')
    .replace(/^-+|-+$/g, '');
}

function render(body) {
  const tokens = md.parse(body, {});
  const used = new Map();
  for (let i = 0; i < tokens.length; i++) {
    const t = tokens[i];
    if (t.type !== 'heading_open') continue;
    const inline = tokens[i + 1];
    const base = 'content-' + slugify(inline.children.filter((c) => c.type === 'text' || c.type === 'code_inline').map((c) => c.content).join(''));
    const n = used.get(base) ?? 0;
    used.set(base, n + 1);
    const id = n === 0 ? base : `${base}-${n}`;
    const link = new Token('html_inline', '', 0);
    link.content = `<a id="${id}" href="#${id}" class="heading-permalink" aria-hidden="true" title="Permalink">#</a>`;
    inline.children.push(link);
  }
  return md.renderer.render(tokens, md.options, {});
}

const clean = (s) => s.replace(/&(#039|#39|apos);/g, "'").replace(/&amp;/g, '&').replace(/&quot;/g, '"').toLowerCase().replace(/[^a-z0-9]+/g, '');

function normaliseHeadings(html, title) {
  html = html.replace(/^\s*<h1\b[^>]*>([\s\S]*?)<\/h1>/i, (m, inner) => {
    const text = inner.replace(/<[^>]*>/g, '');
    return clean(text) !== '' && clean(text) === clean(title) ? '' : m;
  });
  html = html.replace(/<(\/?)h1\b/gi, '<$1h2');
  return html.replace(/^\s+/, '');
}

const toDate = (v) => {
  if (v instanceof Date) return v;
  return new Date(String(v) + 'T00:00:00Z');
};
const pad = (n) => String(n).padStart(2, '0');
const MON = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

export default function () {
  const guides = fs
    .readdirSync(dir)
    .filter((f) => f.endsWith('.md'))
    .map((f) => {
      const { data, content } = matter(fs.readFileSync(path.join(dir, f), 'utf8'));
      const date = toDate(data.date);
      const updated = data.updated ? toDate(data.updated) : date;
      const fmt = (d) => `${pad(d.getUTCDate())} ${MON[d.getUTCMonth()]} ${d.getUTCFullYear()}`;
      return {
        title: String(data.title),
        slug: String(data.slug),
        cluster: String(data.cluster),
        description: String(data.description),
        date,
        dateIso: date.toISOString().slice(0, 10),
        dateLabel: fmt(date),
        datePublished: date.toISOString().replace('.000Z', '+00:00'),
        dateModified: updated.toISOString().replace('.000Z', '+00:00'),
        updatedLabel: fmt(updated),
        wasUpdated: updated.getTime() !== date.getTime(),
        html: normaliseHeadings(render(content), String(data.title)),
      };
    })
    .sort((a, b) => b.date - a.date);
  return guides;
}

