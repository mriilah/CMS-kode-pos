<?php

use App\Http\Controllers\CarikodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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

Route::get('/',[CarikodeController::class,'index'])->name('carikode.index');

Route::get('/about', function () {
    return view('halaman-kodepos.about');
});
Route::get('/privasi', function () {
    return view('halaman-kodepos.privasi');
});
Route::get('/kontak', function () {
    return view('halaman-kodepos.kontak');
});
Route::get('/home', function () {
    return view('halaman-kodepos.home');
});
Route::get('/provinsi/{provinsi}',[CarikodeController::class, 'provinsi'] );
Route::get('/kabupaten/{provinsi}',[CarikodeController::class, 'kabupaten'] );
Route::get('/kecamatan/{provinsi}',[CarikodeController::class, 'kecamatan'] );
Route::get('/kelurahan/{provinsi}',[CarikodeController::class, 'kelurahan'] );
Route::get('/kodepos/{provinsi}',[CarikodeController::class, 'kodepos'] );

Route::get('/asset/img/carikodepos.png', function ($filename) {
    $path = public_path('asset/img/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('image.display');
