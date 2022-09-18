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
    return view('home');
})->name('home');
Route::get('/', function () {
    $comics = config('comics');
    return view('home',['comics'=>$comics]);
})->name('comics');

Route::get('/product', function () {
    $comics = config('comics');
    $product = $comics[0];
    return view('product',compact('product'));
})->name('product');

Route::get('characters', function () {
    return view('characters');
})->name('characters');
Route::get('movies', function () {
    return view('movies');
})->name('movies');
Route::get('tv', function () {
    return view('tv');
})->name('tv');
Route::get('games', function () {
    return view('games');
})->name('games');
Route::get('collectibles', function () {
    return view('collectibles');
})->name('collectibles');
Route::get('videos', function () {
    return view('videos');
})->name('videos');
Route::get('fans', function () {
    return view('fans');
})->name('fans');
