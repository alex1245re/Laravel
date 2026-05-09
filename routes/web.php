<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ContactoController;

// Ruta de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/servicios', [ServicioController::class, 'index']);

// Rutas de recursos para Contactos (CRUD completo)
// Genera automáticamente: index, create, store, show, edit, update, destroy
Route::resource('contactos', ContactoController::class);