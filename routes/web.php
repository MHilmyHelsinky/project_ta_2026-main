<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController; // <-- INI BARIS YANG HILANG TADI

// Halaman Utama / Dashboard User
Route::get('/', function () {
    return view('dashboard.user');
});

// Halaman Dashboard Admin
Route::get('/admin', function () {
    return view('dashboard.admin');
});

// Halaman Login
Route::get('/login', function () {
    return view('auth.login');
});

// Halaman Register
Route::get('/register', function () {
    return view('auth.register');
});

// Halaman Profile
Route::get('/profile', function () {
    return view('profile.index');
});

// Halaman E-Books (Rute buatanmu sebelumnya)
Route::get('/ebooks', [EbookController::class, 'index']);

// Rute lainnya dari frontend
Route::get('/ebooks/create', function () {
    return view('ebooks.create');
});

Route::get('/ebooks/detail', function () {
    return view('ebooks.detail');
});

Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/dashboard-user', function () {
    return view('dashboard.user');
});

// Rute untuk mengetes fitur Open Library API
Route::get('/cek-buku', [EbookController::class, 'cekBukuDariInternet']);