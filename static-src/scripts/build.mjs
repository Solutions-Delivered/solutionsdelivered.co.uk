// Full build: clean dist, Tailwind CSS, JS, then Eleventy (which reads the asset hashes).
import { execFileSync } from 'node:child_process';
import fs from 'node:fs';
const run = (cmd, args) => execFileSync(cmd, args, { stdio: 'inherit' });
fs.rmSync('dist', { recursive: true, force: true });
run('npx', ['tailwindcss', '-i', 'css/app.css', '-o', 'dist/assets/app.css', '--minify']);
run('node', ['scripts/build-js.mjs']);
run('npx', ['eleventy']);
