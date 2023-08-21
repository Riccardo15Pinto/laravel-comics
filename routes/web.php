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
    return view('home');
})->name('home');

Route::get('/character', function () {
    return view('character');
})->name('character');

Route::prefix('/comics')->name('comic.')->group(function () {

    Route::get('/', function () {
        return view('comic.list');
    })->name('list');

    Route::get('/comic/{index}', function ($index) {

        $products = config('comics');
        $product = $products[$index];

        $prev = $index > 0 ? $index - 1 : count($products) - 1;
        $next = $index == count($products) - 1 ? 0 : $index + 1;

        $data = compact('product', 'next', 'prev');

        return view('comic.detail', $data);
    })->name('detail');
});

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
