<!-- resources/views/proyectos/index.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f4f4f4; }
        .btn { padding: 6px 12px; font-size: 14px; color: white; background-color: #007bff; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Lista de Proyectos</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Inicio</th>
                <th>Estado</th>
                <th>Responsable</th>
                <th>Monto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto['id'] }}</td>
                <td>{{ $proyecto['nombre'] }}</td>
                <td>{{ $proyecto['fecha_inicio'] }}</td>
                <td>{{ $proyecto['estado'] }}</td>
                <td>{{ $proyecto['responsable'] }}</td>
                <td>${{ number_format($proyecto['monto'], 2) }}</td>
                <td>
                    <a href="{{ route('proyectos.edit', $proyecto['id']) }}" class="btn">Editar</a>
                    <form action="{{ route('proyectos.destroy', $proyecto['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" style="background-color: red;">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
