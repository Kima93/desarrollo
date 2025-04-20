<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Proyecto</title>
</head>
<body>
    <h1>¿Estás seguro que deseas eliminar este proyecto?</h1>

    <p><strong>{{ $proyecto->nombre }}</strong></p>
    <p>{{ $proyecto->descripcion }}</p>

    <form method="POST" action="{{ route('proyectos.destroy', $proyecto->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>

    <a href="{{ route('proyectos.index') }}">Cancelar</a>
</body>
</html>

