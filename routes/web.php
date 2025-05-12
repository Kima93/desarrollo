<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;


Route::middleware(['jwt.auth'])->group(function () {
    Route::get('/proyectos', [ProyectoController::class, 'index']);
    Route::get('/proyectos/create', [ProyectoController::class, 'create']);
    Route::post('/proyectos', [ProyectoController::class, 'store']);
    Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
    Route::get('/proyectos/{id}/edit', [ProyectoController::class, 'edit']);
    Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
    Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);
});



Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/proyectos/create', [ProyectoController::class, 'create']);
Route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');
