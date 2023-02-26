<?php

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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/destinasi', function () {
    return view('destinasi', [
        "nama" => "Nurul Maghfiroh",
        "email" => "nurma41299@gmail.com",
        "gambar" => "https://tourism.surabaya.go.id/storage/tour/1675736393_1.jpg"
    ]);
});

Route::get('/produk-umkm', function () {
    return view('produk-umkm');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/admin', function () {
    return 'Halaman Admin Tourism Surabaya';
});

Route::get('/admin-panel', function () {
    return 'Halaman Admin Panel Tourism Surabaya';
});
