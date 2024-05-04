<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/produk', function () {
    return view('admin.datatable');
});

Route::post('/login', [AuthController::class, 'Auth'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/hash', function () {
    return view('hash');
});

Route::resource('produk', ProdukController::class);