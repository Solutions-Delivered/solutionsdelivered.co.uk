// Content hashes for cache-busting query strings on the built CSS and JS.
import { createHash } from 'node:crypto';
import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const dist = path.join(path.dirname(fileURLToPath(import.meta.url)), '..', 'dist', 'assets');
const hash = (f) => {
  try {
    return createHash('sha1').update(fs.readFileSync(path.join(dist, f))).digest('hex').slice(0, 10);
  } catch {
    return 'dev';
  }
};

export default { css: hash('app.css'), js: hash('app.js'), alpine: hash('alpine.js') };
