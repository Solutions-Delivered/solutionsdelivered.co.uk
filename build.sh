#!/bin/bash
# Build the static site into static-src/dist (used by Cloudflare Workers Builds and locally)
set -e
cd "$(dirname "$0")/static-src"
npm ci
node scripts/build.mjs
