// No bundler: copy the site script and Alpine into dist/assets.
import fs from 'node:fs';
fs.mkdirSync('dist/assets', { recursive: true });
fs.copyFileSync('js/app.js', 'dist/assets/app.js');
fs.copyFileSync('node_modules/alpinejs/dist/cdn.min.js', 'dist/assets/alpine.js');
