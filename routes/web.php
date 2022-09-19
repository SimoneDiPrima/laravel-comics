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
    $comics = config('comics');
    return view('home',compact('comics'));
})->name('comics');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index',['comics'=>$comics]);
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];
    return view('comics.show',compact('comic'));
})->name('comics.show');
