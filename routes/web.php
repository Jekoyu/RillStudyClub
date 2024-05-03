<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/login', function () {
    return view('Login');
});
Route::post('/login', [AuthController::class, 'Auth'])->name('login');
Route::get('/hash', function () {
    return view('hash');
});