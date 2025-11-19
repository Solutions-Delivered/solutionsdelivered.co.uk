<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/get-started', [PageController::class, 'getStarted'])->name('get-started');
Route::post('/contact', [PageController::class, 'contact'])->name('contact');
