<!-- resources/views/proyectos/show.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px; }
        .project-info { margin-bottom: 15px; }
        .btn { padding: 10px 20px; font-size: 16px; color: white; background-color: #007bff; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Detalles del Proyecto</h2>

        <div class="project-info">
            <strong>ID:</strong> {{ $proyecto['id'] }}
        </div>
        <div class="project-info">
            <strong>Nombre:</strong> {{ $proyecto['nombre'] }}
        </div>
        <div class="project-info">
            <strong>Fecha de Inicio:</strong> {{ $proyecto['fecha_inicio'] }}
        </div>
        <div class="project-info">
            <strong>Estado:</strong> {{ $proyecto['estado'] }}
        </div>
        <div class="project-info">
            <strong>Responsable:</strong> {{ $proyecto['responsable'] }}
        </div>
        <div class="project-info">
            <strong>Monto:</strong> ${{ number_format($proyecto['monto'], 2) }}
        </div>

        <a href="{{ route('proyectos.index') }}" class="btn">Volver a la Lista</a>
    </div>

</body>
</html>
