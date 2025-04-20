<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UFController;

// 1. Listar todos los proyectos
Route::get('/proyectos', [ProyectoController::class, 'index']);

// 2. Agregar un nuevo proyecto
Route::post('/proyectos', [ProyectoController::class, 'store']);

// 3. Eliminar un proyecto por su ID
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);

// 4. Actualizar un proyecto por su ID
Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);

// 5. Obtener un proyecto por su ID
Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);


Route::get('/uf-value', [UFController::class, 'getUFValue']);