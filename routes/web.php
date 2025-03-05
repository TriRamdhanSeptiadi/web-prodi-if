<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang-teknik-informatika', function () {
    return view('tentang-teknik-informatika');
});

Route::get('/visi-misi-tujuan', function () {
    return view('visi-misi-tujuan');
});

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/akreditasi', function () {
    return view('akreditasi');
});

Route::get('/karir', function () {
    return view('karir');
});

Route::get('/kurikulum', function () {
    return view('kurikulum');
});

Route::get('/profil-lulusan', function () {
    return view('profil-lulusan');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/jadwal-penerimaan', function () {
    return view('jadwal-penerimaan');
});

Route::get('/persyaratan-masuk', function () {
    return view('persyaratan-masuk');
});

Route::get('/biaya', function () {
    return view('biaya');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

Route::get('/fasilitas-kampus1', function () {
    return view('fasilitas-kampus1');
});

Route::get('/detail-dosen', function () {
    return view('detail-dosen');
});

Route::get('/detail-kata-sambutan', function () {
    return view('detail-kata-sambutan');
});

Route::get('/detail-artikel', function () {
    return view('detail-artikel');
});

Route::get('/detail-berita', function () {
    return view('detail-berita');
});

Route::get('/detail-kegiatan', function () {
    return view('detail-kegiatan');
});