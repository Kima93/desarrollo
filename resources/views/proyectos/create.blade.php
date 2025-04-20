@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Proyecto</h1>

        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Proyecto</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" id="descripcion" required></textarea>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" name="estado" id="estado" required>
                    <option value="en progreso">En progreso</option>
                    <option value="finalizado">Finalizado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable</label>
                <input type="text" class="form-control" name="responsable" id="responsable" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="number" class="form-control" name="monto" id="monto" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Proyecto</button>
        </form>
    </div>
@endsection
