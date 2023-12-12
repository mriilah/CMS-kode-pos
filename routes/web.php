<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;

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
Route::post('/carikode', 'App\Http\Controllers\CarikodeController@store');
Route::get('/', function () {
    return view('halaman-kodepos.about');
});
Route::get('/master', function () {
    return view('layout.master');
});
Route::get('/carikode', function () {
    $tbl_kodepos = DB::table('tbl_kodepos')->get();
    return view('halaman-kodepos.carikode', compact('tbl_kodepos'));
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
Route::get('/kodepos', function () {
    return view('halaman-kodepos.kodepos');
});
// Route::get('/','App\Http\Controllers\PostController@welcome');
Route::get('/halaman-kodepos','PostController@about');
Route::get('/{slug}','PostController@postDetails');
