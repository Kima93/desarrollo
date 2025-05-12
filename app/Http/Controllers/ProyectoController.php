<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
{
    $proyectos = Proyecto::all(); // <-- consulta a la base de datos
    return response()->json($proyectos);
}

public function create()
{
    return view('proyectos.create');
}

public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Proyecto::create([
            'nombre' => $request->nombre,
        ]);

        return redirect('/proyectos')->with('success', 'Proyecto creado correctamente.');
    }

    public function show($id)
{
    $proyecto = Proyecto::findOrFail($id);  // Encuentra el proyecto por ID o lanza un error 404
    return view('proyectos.show', compact('proyecto'));
}

   public function edit($id)
{
    $proyecto = Proyecto::findOrFail($id);  // Encuentra el proyecto o lanza un error 404
    return view('proyectos.edit', compact('proyecto'));
}
    public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
    ]);

    $proyecto = Proyecto::findOrFail($id);
    $proyecto->nombre = $request->nombre;
    $proyecto->save();

    return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
}


}


