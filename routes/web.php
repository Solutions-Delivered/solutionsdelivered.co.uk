<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about/', [PageController::class, 'about'])->name('about');
Route::get('/solutions/', [PageController::class, 'solutions'])->name('solutions');
Route::get('/how-we-work/', [PageController::class, 'howWeWork'])->name('how-we-work');
Route::get('/careers/', [PageController::class, 'careers'])->name('careers');
Route::get('/get-started/', [PageController::class, 'getStarted'])->name('get-started');
Route::post('/contact', [PageController::class, 'contact'])->name('contact');

// Legal pages
Route::get('/privacy/', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms/', [PageController::class, 'terms'])->name('terms');

// Sitemap
Route::get('/sitemap.xml', function() {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
});
