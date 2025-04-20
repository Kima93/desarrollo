<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // ✅ Método para API (respuesta en JSON)
    public function apiIndex()
    {
        return response()->json(Proyecto::all());
    }

    // Mostrar todos los proyectos (vista)
    public function index(Request $request)
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    // Mostrar formulario para crear proyecto
    public function create()
    {
        return view('proyectos.create');
    }

    // Mostrar un proyecto específico por ID
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.show', compact('proyecto'));
    }

    // Mostrar formulario para editar un proyecto
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.edit', compact('proyecto'));
    }

    // Guardar un nuevo proyecto
    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect('/proyectos');
    }

    // Actualizar un proyecto
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());
        return redirect('/proyectos');
    }

    // Eliminar un proyecto
    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        return redirect('/proyectos');
    }
}


