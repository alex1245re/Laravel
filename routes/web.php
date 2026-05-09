<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

// Ruta pública de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas protegidas por autenticación
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return redirect()->route('contactos.index');
    })->name('dashboard');
    
    // CRUD de Contactos
    Route::resource('contactos', ContactoController::class);
    
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
