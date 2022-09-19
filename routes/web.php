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
    return view('comics',['comics'=>$comics]);
})->name('comics');

Route::get('/singlecomic', function () {
    $comics = config('comics');
    $comic = $comics[0];
    return view('singlecomic',compact('comic'));
});
