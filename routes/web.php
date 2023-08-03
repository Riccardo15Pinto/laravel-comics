<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('includes/main-home');
})->name('home');

Route::get('/character', function () {
    return view('layouts/character');
})->name('character');

Route::get('/comics', function () {
    return view('layouts/comics');
})->name('comics');

Route::get('/movies', function () {
    return view('layouts/movies');
})->name('movies');

Route::get('/tv', function () {
    return view('layouts/tv');
})->name('tv');

Route::get('/collectibles', function () {
    return view('layouts/collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('layouts/videos');
})->name('videos');

Route::get('/fans', function () {
    return view('layouts/fans');
})->name('fans');

Route::get('/news', function () {
    return view('layouts/news');
})->name('news');

Route::get('/shop', function () {
    return view('layouts/shop');
})->name('shop');
