<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about/', [PageController::class, 'about'])->name('about');
Route::get('/solutions/', [PageController::class, 'solutions'])->name('solutions');
Route::get('/how-we-work/', [PageController::class, 'howWeWork'])->name('how-we-work');
Route::get('/careers/', [PageController::class, 'careers'])->name('careers');
Route::get('/get-started/', [PageController::class, 'getStarted'])->name('get-started');
Route::get('/packages/', [PageController::class, 'packages'])->name('packages');
Route::post('/contact', [PageController::class, 'contact'])->name('contact')->middleware(['throttle:5,1', 'honeypot']);

// Legal pages
Route::get('/privacy/', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms/', [PageController::class, 'terms'])->name('terms');

// Sitemap
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
});

// Logo URL preservation - serve new SVG logo for old PNG requests
Route::get('/logo.png', function () {
    return response()->file(public_path('logo.svg'), [
        'Content-Type' => 'image/svg+xml',
        'Cache-Control' => 'public, max-age=31536000',
    ]);
});

Route::get('/logo@2x.png', function () {
    return response()->file(public_path('logo.svg'), [
        'Content-Type' => 'image/svg+xml',
        'Cache-Control' => 'public, max-age=31536000',
    ]);
});

Route::get('/health', function () {
    $checks = ['app' => true];

    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        $checks['database'] = true;
    } catch (\Exception $e) {
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
