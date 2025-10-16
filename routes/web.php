<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LatestPostController;
use App\Http\Controllers\ListGameController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SinglePostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);

Route::get('/latest', [LatestPostController::class, 'index']);

Route::get('/search', [SearchController::class, 'index']);

Route::get('/list-game', [ListGameController::class, 'index']);

Route::get('/kategori', [CategoryController::class, 'index']);

Route::get('/kategori/{slug}', [CategoryController::class, 'show']);

Route::get('/genre', [GenreController::class, 'index']);

Route::get('/genre/{slug}', [GenreController::class, 'show']);

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/privacy-policy', function() {
    return view('privacypolicy');
});

Route::get('/{post:slug}', [SinglePostController::class, 'show']);