<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home-registered', function () {
    return view('auth.homeregistered');
})->middleware('auth')->name('home.registered');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Ruta para usuarios NO registrados
Route::get('/', function () {
    return view('homenotregistered');
})->name('homenotregistered');
