<?xml version="1.0" encoding="UTF-8"?>
@php
    // These are static marketing pages with no database row to carry an
    // updated_at, so lastmod is derived from each view's own filemtime: it
    // moves only when the page's content actually changes on disk, which is
    // exactly what lastmod is meant to signal. Deploys that touch unrelated
    // files don't bump it, and it can never show a fake recent date.
    $lastmod = fn (string $view) => date('Y-m-d', filemtime(resource_path("views/{$view}.blade.php")));

    // Guides carry their own reviewed-date discipline in front matter
    // ('updated', falling back to 'date'), which is a more honest signal than
    // the view file's mtime: it moves only when someone deliberately re-verifies
    // or rewrites the guide, not on every unrelated deploy.
    $guides = app(\App\Services\GuideRepository::class)->all();
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- AI Foundations is a noindex holding state and is intentionally omitted. --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ $lastmod('home') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('foundations-os') }}</loc>
        <lastmod>{{ $lastmod('foundations-os') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('how-it-works') }}</loc>
        <lastmod>{{ $lastmod('how-it-works') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('consultancy') }}</loc>
        <lastmod>{{ $lastmod('consultancy') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('outsourced-it-director') }}</loc>
        <lastmod>{{ $lastmod('outsourced-it-director') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('guides.index') }}</loc>
        <lastmod>{{ $lastmod('guides/index') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach($guides as $guide)
    <url>
        <loc>{{ route('guides.show', $guide->slug) }}</loc>
        <lastmod>{{ $guide->updated->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>{{ $lastmod('about') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ $lastmod('contact') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ route('privacy') }}</loc>
        <lastmod>{{ $lastmod('privacy') }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc>{{ route('terms') }}</loc>
        <lastmod>{{ $lastmod('terms') }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
</urlset>
