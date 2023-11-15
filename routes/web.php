<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController; //importar tu controlador

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Rutas para el controlador de países
    Route::get('/paises', [PaisController::class, 'index'])->name('paises.index');
    Route::get('/paises/create', [PaisController::class, 'create'])->name('paises.create');
    Route::get('/paises/{pais}/edit', [PaisController::class, 'edit'])->name('paises.edit');


});

// Ruta para cargar la vista de Vue.js
Route::get('/paises', function () {
    return view('paises');
})->name('paises'); //Nombre a la ruta

// Rutas protegidas por autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Otras rutas protegidas
});
