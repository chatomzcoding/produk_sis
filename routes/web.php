<?php

use App\Http\Controllers\Admin\AksespegawaiController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\InfowebsiteController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\SaranaController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Homepage\LandingController;
use App\Http\Controllers\Kbm\JadwalkelasController;
use App\Http\Controllers\Kbm\JadwalpelajaranController;
use App\Http\Controllers\Kbm\KbmController;
use App\Http\Controllers\Kbm\KelasController;
use App\Http\Controllers\Kbm\MatapelajaranController;
use App\Http\Controllers\Kbm\TahunajaranController;
use App\Http\Controllers\Sekolah\AksessiswaController;
use App\Http\Controllers\Sekolah\PegawaiController;
use App\Http\Controllers\Sekolah\SiswaController;
use App\Http\Controllers\Sistem\UserController;
use App\Http\Controllers\Sistem\VisitorController;
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


    Route::resource('siswa', SiswaController::class);
    Route::resource('aksessiswa', AksessiswaController::class);
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
        
        // SEKOLAH
        Route::resource('pegawai', PegawaiController::class);
        Route::resource('aksespegawai', AksespegawaiController::class);
        
        // KBM
        Route::resource('kbm', KbmController::class);
        Route::resource('tahunajaran', TahunajaranController::class);
        Route::resource('kelas', KelasController::class);
        Route::resource('matapelajaran', MatapelajaranController::class);
        Route::resource('jadwalpelajaran', JadwalpelajaranController::class);
        Route::resource('jadwalkelas', JadwalkelasController::class);

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
