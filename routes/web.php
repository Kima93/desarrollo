<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UFController;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/', [UFController::class, 'mostrarUf']);
Route::get('/uf-value', [UFController::class, 'getUFValue']);
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::get('/proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');
Route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');
Route::get('/proyectos/{id}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::put('/proyectos/{id}', [ProyectoController::class, 'update'])->name('proyectos.update');
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');
Route::get('/proyectos/{id}', [ProyectoController::class, 'show'])->name('proyectos.show');
