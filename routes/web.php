<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('layout.nav');
});
Route::get('/carikode', function () {
    return view('halaman-kodepos.carikode');
});
Route::get('/about', function () {
    return view('halaman-kodepos.about');
});
Route::get('/privasi', function () {
    return view('halaman-kodepos.privasi');
});
Route::get('/kontak', function () {
    return view('halaman-kodepos.kontak');
});
// Route::get('/','App\Http\Controllers\PostController@welcome');
Route::get('/halaman-kodepos','PostController@about');
Route::get('/{slug}','PostController@postDetails');
