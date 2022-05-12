<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UsersController;
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

Route::get('/fasilitas', function () {
    return view('pages.fasilitas');
})->name('/fasilitas');
Route::get('/struktur-organisasi', function () {
    return view('pages.struktur');
})->name('/struktur');
Route::get('/kegiatan', function () {
    return view('pages.kegiatan');
})->name('/kegiatan');
Route::get('/info', function () {
    return view('pages.info');
})->name('/info');
Route::get('/visimisi', function () {
    return view('pages.visimisi');
})->name('/visimisi');

//Login
Route::post('/login', [UsersController::class, 'authenticate']);
Route::post('/logout', [UsersController::class, 'logout']);

//Beranda
Route::get('/login', [BerandaController::class, 'index'])->name('beranda')->middleware('guest');

//Pendaftaran
Route::get('/pendaftaran', [UsersController::class, 'pendaftaran'])->middleware('guest');
Route::post('/pendaftaran', [UsersController::class, 'store']);
Route::get('/pendaftaran-lanjutan', [UsersController::class, 'pendaftaran_lanjutan']);
Route::get('/pendaftaran-pdf', [UsersController::class, 'pendaftaran_pdf']);

//Dashboard
Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/dashboard-unduh', function () {
    return view('pages.dashboard-unduh');
})->name('dashboard-unduh');


Route::get('/hasil-seleksi', function () {
    return view('pages.hasil-seleksi');
})->name('hasil-seleksi');
Route::get('/hasil-seleksi-diterima', function () {
    return view('pages.hasil-seleksi-diterima');
})->name('hasil-seleksi-diterima');
Route::get('/hasil-seleksi-gagal', function () {
    return view('pages.hasil-seleksi-gagal');
})->name('hasil-seleksi-gagal');
Route::get('/dashboard-admin', function () {
    return view('pages.dashboard-admin');
})->name('dashboard-admin');
Route::get('/seleksi-pendaftaran', function () {
    return view('pages.seleksi-pendaftaran');
})->name('seleksi-pendaftaran');
Route::get('/data-siswa', function () {
    return view('pages.data-siswa');
})->name('data-siswa');
Route::get('/home-edit', function () {
    return view('pages.home-edit');
})->name('home-edit');
Route::get('/visimisi-edit', function () {
    return view('pages.visimisi-edit');
})->name('visimisi-edit');
Route::get('/struktur-edit', function () {
    return view('pages.struktur-edit');
})->name('struktur-edit');
Route::get('/kegiatan-edit', function () {
    return view('pages.kegiatan-edit');
})->name('kegiatan-edit');
Route::get('/fasilitas-edit', function () {
    return view('pages.fasilitas-edit');
})->name('fasilitas-edit');
Route::get('/info-edit', function () {
    return view('pages.info-edit');
})->name('info-edit');
Route::get('/seleksi-pendaftaran-gagal', function () {
    return view('pages.seleksi-pendaftaran-gagal');
})->name('seleksi-pendaftaran-gagal');

Route::get('/card', function () {
    return view('pages.card');
})->name('card');
