@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Proyectos</h1>
        <a href="{{ route('proyectos.create') }}" class="btn btn-success">Crear Nuevo Proyecto</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Responsable</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->nombre }}</td>
                        <td>{{ $proyecto->estado }}</td>
                        <td>{{ $proyecto->responsable }}</td>
                        <td>
                            <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

