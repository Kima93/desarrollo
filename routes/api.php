<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UFController;

Route::get('/proyectos', [ProyectoController::class, 'apiIndex']);
Route::post('/proyectos', [ProyectoController::class, 'apiStore']);
Route::get('/proyectos/{id}', [ProyectoController::class, 'apiShow']);
Route::put('/proyectos/{id}', [ProyectoController::class, 'apiUpdate']);
Route::delete('/proyectos/{id}', [ProyectoController::class, 'apiDestroy']);

