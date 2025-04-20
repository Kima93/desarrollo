<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $proyecto->nombre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 1.2em;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $proyecto->nombre }}</h1>
        <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
        <p><strong>Responsable:</strong> {{ $proyecto->responsable }}</p>
        <p><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_inicio }}</p>
        <p><strong>Monto:</strong> {{ $proyecto->monto }}</p>
        <a href="{{ url('/proyectos') }}">Volver a la lista de proyectos</a>
    </div>
</body>
</html>







