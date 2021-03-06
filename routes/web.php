<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PaudController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VisiMisiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//Login
Route::post('/login', [UsersController::class, 'authenticate']);
Route::post('/logout', [UsersController::class, 'logout']);

//Beranda
Route::get('/login', [BerandaController::class, 'index'])->name('beranda')->middleware('guest');


//Pendaftaran
Route::get('/pendaftaran', [UsersController::class, 'pendaftaran']);
Route::post('/pendaftaran', [UsersController::class, 'store']);
Route::get('/pendaftaran-lanjutan', [UsersController::class, 'pendaftaran_lanjutan']);
Route::get('/pendaftaran-pdf', [UsersController::class, 'pendaftaran_pdf']);

//VISI MISI
Route::get('/visimisi', [VisiMisiController::class, 'index']);
Route::get('/visimisi-edit', [VisiMisiController::class, 'edit_visimisi'])->middleware('admin');
Route::post('/update_visi', [VisiMisiController::class, 'update_visi'])->middleware('admin');
Route::post('/update_misi', [VisiMisiController::class, 'update_misi'])->middleware('admin');

//Struktur
Route::get('/struktur_admin', [StrukturController::class, 'index_admin'])->middleware('admin');
Route::get('/struktur', [StrukturController::class, 'index']);
Route::post('/update_struktur', [StrukturController::class, 'update_struktur'])->middleware('admin');

//Kegiatan
Route::get('/kegiatan_admin', [KegiatanController::class, 'index_admin'])->middleware('admin');
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::post('/tambah_kegiatan', [KegiatanController::class, 'tambah_kegiatan'])->middleware('admin');
Route::post('/update_kegiatan', [KegiatanController::class, 'update_kegiatan'])->middleware('admin');
Route::get('/delete_kegiatan/{id}', [KegiatanController::class, 'delete_kegiatan'])->middleware('admin');

//Fasilitas
Route::get('/fasilitas_admin', [FasilitasController::class, 'fasilitas_admin'])->middleware('admin');
Route::get('/fasilitas', [FasilitasController::class, 'fasilitas']);
Route::post('/tambah_fasilitas', [FasilitasController::class, 'tambah_fasilitas'])->middleware('admin');
Route::post('/update_fasilitas', [FasilitasController::class, 'update_fasilitas'])->middleware('admin');
Route::get('/delete_fasilitas/{id}', [FasilitasController::class, 'delete_fasilitas'])->middleware('admin');

//Info
Route::get('/info_admin', [PaudController::class, 'info_admin'])->middleware('admin');
Route::get('/info', [PaudController::class, 'info']);
Route::post('/update_info', [PaudController::class, 'update_info'])->middleware('admin');
Route::post('/tambah_info', [PaudController::class, 'tambah_info'])->middleware('admin');
Route::post('/update_paud', [PaudController::class, 'update_paud'])->middleware('admin');
Route::get('/delete_paud/{id}', [PaudController::class, 'delete_paud'])->middleware('admin');

//Data Siswa
Route::get('/data_siswa', [DataSiswaController::class, 'data_siswa'])->middleware('admin');
Route::get('/cetak_kartu/{id}', [DataSiswaController::class, 'cetak_kartu']);
Route::get('/cetak_pdf/{id}', [DataSiswaController::class, 'cetak_pdf']);

//Pengumuman Siswa
Route::get('/pengumuman', [PengumumanController::class, 'pengumuman'])->middleware('siswa');


//Dashboard
Route::get('/', [DashboardController::class, 'dashboard'])->middleware('siswa');


Route::get('/dashboard-unduh', function () {
    return view('pages.dashboard-unduh');
})->name('dashboard-unduh');

//=======================ADMIN=======================
//pendaftaran admin
Route::get('/register-admin', [UsersController::class, 'register'])->middleware('guest');
Route::post('/register-admin', [UsersController::class, 'register_admin']);
//Dashboard ADMIN
Route::get('/dashboard-admin', [DashboardController::class, 'dashboard_admin'])->middleware('admin');
//Update Data Siswa
Route::post('/update_siswa', [UsersController::class, 'update_siswa'])->middleware('auth');
//Hapus Data Siswa
Route::get('/hapus_siswa/{id}', [UsersController::class, 'hapus_siswa'])->middleware('admin');

//SELEKSI 
//ADmin seleksi pendaftaran
Route::get('/seleksi-pendaftaran', [SeleksiController::class, 'seleksi_pendaftaran'])->middleware('admin');
//ADmin acc peserta seleksi
Route::post('/seleksi_diterima', [SeleksiController::class, 'seleksi_diterima'])->middleware('admin');
//ADmin decline peserta seleksi
Route::post('/seleksi_ditolak', [SeleksiController::class, 'seleksi_ditolak'])->middleware('admin');

//=======================END ADMIN=======================

//Laporan
Route::get('/laporan', [LaporanController::class, 'laporan'])->middleware('admin');
Route::post('/cari_laporan', [LaporanController::class, 'cari_laporan'])->middleware('admin');
Route::post('/cetak_laporan', [LaporanController::class, 'cetak_laporan'])->name('cetak_laporan')->middleware('admin');




Route::get('/home-edit', function () {
    return view('pages.home-edit');
})->name('home-edit');

Route::get('/struktur-edit', function () {
    return view('pages.struktur-edit');
})->name('struktur-edit');

Route::get('/seleksi-pendaftaran-gagal', function () {
    return view('pages.seleksi-pendaftaran-gagal');
})->name('seleksi-pendaftaran-gagal');

Route::get('/card', function () {
    return view('pages.card');
})->name('card');
