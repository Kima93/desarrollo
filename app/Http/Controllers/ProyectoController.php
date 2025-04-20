<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Mostrar todos los proyectos
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos')); // Devolver la vista de proyectos
    }

    // Mostrar el formulario para crear un nuevo proyecto
    public function create()
    {
        return view('proyectos.create'); // Vista para crear un nuevo proyecto
    }

    // Almacenar un nuevo proyecto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required|date',
            'estado' => 'required',
            'responsable' => 'required',
            'monto' => 'required|numeric',
        ]);

        Proyecto::create($request->all());

        return redirect()->route('proyectos.index'); // Redirigir después de guardar
    }

    // Mostrar el formulario para editar un proyecto
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.edit', compact('proyecto')); // Vista para editar el proyecto
    }

    // Actualizar un proyecto
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required|date',
            'estado' => 'required',
            'responsable' => 'required',
            'monto' => 'required|numeric',
        ]);

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());

        return redirect()->route('proyectos.index'); // Redirigir después de la actualización
    }

    // Eliminar un proyecto
    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('proyectos.index'); // Redirigir después de la eliminación
    }

    // Mostrar un proyecto específico
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.show', compact('proyecto')); // Vista para ver el proyecto
    }
}
