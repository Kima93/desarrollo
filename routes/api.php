<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Rutas públicas (sin middleware JWT)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas por JWT
Route::middleware(['jwt.auth'])->group(function () {
    Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
    Route::get('/proyectos/create', [ProyectoController::class, 'create']);
    Route::post('/proyectos', [ProyectoController::class, 'store']);
    Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
    Route::get('/proyectos/{id}/edit', [ProyectoController::class, 'edit']);
    Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
    Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);

    Route::get('/usuarios', [UsuarioController::class, 'index']);
});

