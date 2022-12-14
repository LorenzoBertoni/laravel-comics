<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('/products', function () {

    $comicsList = config('comics');

    return view('products', ['comics' => $comicsList]);
})->name('products');

Route::get('/latest-news', function () {
    return view('latestNews');
})->name('latest-news');
