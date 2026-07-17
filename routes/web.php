<?php

use App\Http\Controllers\PageController;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

Route::get('/', [PageController::class, 'home'])->name('home');

// Productised AI offer. Holding state while the product spec is refined.
Route::get('/ai-foundations', [PageController::class, 'aiFoundations'])->name('ai-foundations');
Route::get('/foundations-os', [PageController::class, 'foundationsOs'])->name('foundations-os');

Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/consultancy', [PageController::class, 'consultancy'])->name('consultancy');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Post-purchase confirmation. {product} maps to a slug in config/polar.php;
// Polar appends ?checkout_id={CHECKOUT_ID}, which we verify server-side.
Route::get('/thank-you/{product}', [PageController::class, 'thankYou'])->name('thank-you');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])
    ->name('contact.submit')
    ->middleware(['throttle:5,1', 'honeypot']);

// Legal pages
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

// Redirects from the previous IA (preserve SEO and inbound links).
Route::redirect('/solutions', '/consultancy', 301);
Route::redirect('/how-we-work', '/how-it-works', 301);
Route::redirect('/get-started', '/contact', 301);
Route::redirect('/packages', '/consultancy', 301);
Route::redirect('/careers', '/', 301);

// Sitemap
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
});

// llms.txt: a plain-text summary for AI assistants and crawlers.
Route::get('/llms.txt', function () {
    return response()->view('llms')->header('Content-Type', 'text/plain; charset=utf-8');
})->name('llms');

// Logo URL preservation - serve the SVG logo for old PNG requests.
foreach (['/logo.png', '/logo@2x.png'] as $legacyLogo) {
    Route::get($legacyLogo, function () {
        return response()->file(public_path('logo.svg'), [
            'Content-Type' => 'image/svg+xml',
            'Cache-Control' => 'public, max-age=31536000',
        ]);
    });
}

// Brochure PDF. Served through the app rather than from public/ so the
// noindex header can be attached: Caddy serves any file that exists on disk
// directly, so a file in public/ never reaches PHP.
Route::get('/brochure.pdf', function () {
    return response()->file(resource_path('pdf/brochure.pdf'), [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="technical-partner-packages.pdf"',
        'X-Robots-Tag' => 'noindex',
        'Cache-Control' => 'public, max-age=3600',
    ]);
})->name('brochure')
    // A static asset needs no session. Dropping these keeps Set-Cookie off the
    // response, which would otherwise stop Cloudflare edge-caching it.
    ->withoutMiddleware([
        StartSession::class,
        ShareErrorsFromSession::class,
        PreventRequestForgery::class,
        AddQueuedCookiesToResponse::class,
    ]);

Route::get('/health', function () {
    $checks = ['app' => true];

    try {
        DB::connection()->getPdo();
        $checks['database'] = true;
    } catch (Exception $e) {
        $checks['database'] = false;
    }

    $healthy = ! in_array(false, $checks, true);

    return response()->json([
        'status' => $healthy ? 'healthy' : 'degraded',
        'app' => config('app.name'),
        'checks' => $checks,
        'timestamp' => now()->toISOString(),
    ], $healthy ? 200 : 503);
})->name('health');
