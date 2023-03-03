<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
URL::asset('path/to/asset');

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title" => "Dashboard"
    ]);
});

Route::get('/tpa', function () {
    return view('tpa',[
        "title" => "Kegiatan TPA"
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home', [ 
        "title" => "Kelola Konsumsi"
    ]);
});

Route::get('/kelola_konsumsi', function () {
    return view('kelola_konsumsi', [ 
        "title" => "Kelola Konsumsi"
    ]);
});

Route::get('/tadarus', function () {
    return view('tadarus', [
        "title" => "Tadarus"
    ]);
});

Route::get('/khataman', function () {
    return view('khataman', [
        "title" => "Khataman & Nuzulul Quran"
    ]);
});

Route::get('/tarawih', function () {
    return view('tarawih', [
        "title" => "Dashboard"
    ]);
});

Route::get('/zakat', function () {
    return view('zakat', [
        "title" => "Zakat"
    ]);
});

Route::get('/takbiran', function () {
    return view('takbiran', [
        "title" => "Takbiran"
    ]);
});

Route::get('/sholatied', function () {
    return view('sholatied', [
        "title" => "Sholat ied"
    ]);
});

Route::get('/laporan', function () {
    return view('laporan', [
        "title" => "Laporan"
    ]);
});

Route::get('/warga', function () {
    return view('warga', [
        "title" => "Warga"
    ]);
});

Route::get('tambah/tambah_data_kelola_konsumsi', function () {
    return view('tambah/tambah_data_kelola_konsumsi', [
        "title" => "Tambah Data Kelola Konsumsi"
    ]);
});

Route::get('/logout', function () {
    return view('/logout', [
        "title" => "Halaman Beranda"
    ]);
});

Route::get('/login', function () {
    return view('/login', [
    
    ]);
});