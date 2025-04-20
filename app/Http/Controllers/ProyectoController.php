<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // 1. Listar todos los proyectos
    public function index()
    {
        $proyectos = Proyecto::all();
        return response()->json($proyectos);
    }

    // 2. Crear un nuevo proyecto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'estado' => 'required|string|max:100',
            'responsable' => 'required|string|max:255',
            'monto' => 'required|numeric',
        ]);

        $proyecto = Proyecto::create([
            'nombre' => $request->nombre,
            'fecha_inicio' => $request->fecha_inicio,
            'estado' => $request->estado,
            'responsable' => $request->responsable,
            'monto' => $request->monto,
        ]);

        return response()->json($proyecto, 201);
    }

    // 3. Obtener un proyecto por ID
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            return response()->json(['error' => 'Proyecto no encontrado'], 404);
        }

        return response()->json($proyecto);
    }

    // 4. Actualizar un proyecto por ID
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            return response()->json(['error' => 'Proyecto no encontrado'], 404);
        }

        $request->validate([
            'nombre' => 'string|max:255',
            'fecha_inicio' => 'date',
            'estado' => 'string|max:100',
            'responsable' => 'string|max:255',
            'monto' => 'numeric',
        ]);

        $proyecto->update($request->all());

        return response()->json($proyecto);
    }

    // 5. Eliminar un proyecto por ID
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            return response()->json(['error' => 'Proyecto no encontrado'], 404);
        }

        $proyecto->delete();

        return response()->json(['message' => 'Proyecto eliminado correctamente']);
    }
}
