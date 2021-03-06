<?php

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\AksespegawaiController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\InfowebsiteController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\SaranaController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Guru\AbsensikelasController;
use App\Http\Controllers\Guru\HomeController as GuruHomeController;
use App\Http\Controllers\Guru\SiswanilaiController;
use App\Http\Controllers\Guru\SoalController;
use App\Http\Controllers\Guru\UjianController;
use App\Http\Controllers\Guru\WalikelasController;
use App\Http\Controllers\Homepage\LandingController;
use App\Http\Controllers\Kbm\JadwalkelasController;
use App\Http\Controllers\Kbm\JadwalpelajaranController;
use App\Http\Controllers\Kbm\KbmController;
use App\Http\Controllers\Kbm\KelasController;
use App\Http\Controllers\Kbm\MatapelajaranController;
use App\Http\Controllers\Kbm\TahunajaranController;
use App\Http\Controllers\Sekolah\AksessiswaController;
use App\Http\Controllers\Sekolah\ArsippegawaiController;
use App\Http\Controllers\Sekolah\InventarisController;
use App\Http\Controllers\Sekolah\KehadiransiswaController;
use App\Http\Controllers\Sekolah\KepegawaianController;
use App\Http\Controllers\Sekolah\ListprasaranaController;
use App\Http\Controllers\Sekolah\PegawaiController;
use App\Http\Controllers\Sekolah\PrasaranaController;
use App\Http\Controllers\Sekolah\SiswaController;
use App\Http\Controllers\Sistem\UserController;
use App\Http\Controllers\Sistem\VisitorController;
use App\Http\Controllers\Siswa\HomeController;
use App\Http\Controllers\Siswa\SiswanilaiController as SiswaSiswanilaiController;
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

    // akses siswa
    Route::get('homesiswa/biodata/{id}',[HomeController::class,'biodata']);
    Route::get('homesiswa/jadwal/{id}',[HomeController::class,'jadwal']);
    Route::get('homesiswa/ujian/{id}',[HomeController::class,'ujian']);
    Route::get('homesiswa/soal/{id}/{ujian}',[HomeController::class,'soal']);
    Route::resource('siswanilai', SiswaSiswanilaiController::class);
    // akses guru
    Route::get('homeguru/jadwal/{id}',[GuruHomeController::class,'jadwal']);
    Route::get('homeguru/agendakelas/{id}',[GuruHomeController::class,'agendakelas']);
    Route::get('homeguru/pelajaran/{id}',[GuruHomeController::class,'pelajaran']);
    Route::get('homeguru/catatabsensi/{id}/{tanggal}',[GuruHomeController::class,'catatabsensi']);
    Route::get('walikelas/{id}',[WalikelasController::class,'index']);
    Route::resource('ujian', UjianController::class);
    Route::resource('absensikelas', AbsensikelasController::class);
    Route::resource('soal', SoalController::class);

    Route::resource('siswa', SiswaController::class);
    Route::resource('kehadiransiswa', KehadiransiswaController::class);
    Route::resource('aksessiswa', AksessiswaController::class);

    Route::get('kepegawaian', [KepegawaianController::class,'index']);
    Route::get('kepegawaian/{id}', [KepegawaianController::class,'show']);
    Route::resource('arsippegawai', ArsippegawaiController::class);
    // SARANA PRASARANA
    Route::resource('prasarana', PrasaranaController::class);
    Route::resource('listprasarana', ListprasaranaController::class);
    Route::resource('inventaris', InventarisController::class);

      // KBM
      Route::resource('kbm', KbmController::class);
      Route::resource('tahunajaran', TahunajaranController::class);
      Route::resource('kelas', KelasController::class);
      Route::resource('matapelajaran', MatapelajaranController::class);
      Route::resource('jadwalpelajaran', JadwalpelajaranController::class);
      Route::resource('jadwalkelas', JadwalkelasController::class);
      
    // Route Admin
    Route::middleware(['admin'])->group(function () {
        // simpan route admin dibawah ini

        // ABSENSI
        Route::get('admin/absensi',[AbsensiController::class,'index']);
        Route::get('admin/absensi/{sesi}',[AbsensiController::class,'show']);

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
