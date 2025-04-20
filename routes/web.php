<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;


// Rutas para ver las vistas
Route::get('/proyectos', function () {
    return response()->json(App\Models\Proyecto::all());
});
Route::get('/proyectos', [ProyectoController::class, 'index']); // Mostrar todos los proyectos
Route::get('/proyectos/crear', [ProyectoController::class, 'create']); // Mostrar formulario para crear proyecto
Route::get('/proyectos/{id}', [ProyectoController::class, 'show']); // Ver un proyecto por ID
Route::get('/proyectos/{id}/editar', [ProyectoController::class, 'edit']); // Formulario para editar un proyecto
Route::post('/proyectos', [ProyectoController::class, 'store']); // Guardar nuevo proyecto
Route::put('/proyectos/{id}', [ProyectoController::class, 'update']); // Actualizar un proyecto
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']); // Eliminar un proyecto


