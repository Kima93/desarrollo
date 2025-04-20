<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto: {{ $proyecto->nombre }}</title>
    <!-- Agregar el enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="mt-5">{{ $proyecto->nombre }}</h1>
        <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>

        <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Volver al listado</a>
    </div>

    <!-- Agregar el script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
