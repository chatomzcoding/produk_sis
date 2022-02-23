<?php

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\InfowebsiteController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\SaranaController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Homepage\LandingController;
use App\Http\Controllers\Sistem\UserController;
use App\Http\Controllers\Sistem\VisitorController;
use App\Http\Controllers\SiswaController;
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

// HOMEPAGE
Route::get('/',[LandingController::class,'index']);
/*
-------------------------------------------------------------------------------------------------
*/

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    // Umum
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');

    Route::get('/demo',[DemoController::class,'index']);


    // Route Admin
    Route::middleware(['admin'])->group(function () {
        // simpan route admin dibawah ini

        // SISTEM
        Route::resource('info-website', InfowebsiteController::class);
        Route::resource('visitor', VisitorController::class);
        
        // DATA MASTER
        Route::resource('artikel', ArtikelController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('sarana', SaranaController::class);
        
        // PERCOBAAN
        Route::resource('siswa', SiswaController::class);
    });

    Route::resource('user', UserController::class);
});

// --------------------------------------------------------------------------------------------
// PENGUJIAN DLL
// --------------------------------------------------------------------------------------------
// Cetak PDF dengan dompdf packgake
Route::get('/cetak/lihat','App\Http\Controllers\Pengujian\PrintpdfController@get');
Route::get('/cetak/download','App\Http\Controllers\Pengujian\PrintpdfController@out');
// --------------------------------------------------------------------------------------------
