<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Ruta para la página de inicio no registrada
Route::get('/', [HomeController::class, 'index'])->name('home.notregistered');

// Ruta para la página de inicio de sesión
Route::get('/login', function () {
    return view('auth.login'); // Asegúrate de que 'auth.login' sea la vista correcta
})->name('login');

// Otras rutas que puedas tener
// Route::get('/about', [AboutController::class, 'index'])->name('about');
// ... añade aquí más rutas según tu aplicación
