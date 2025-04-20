<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
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
        label {
            margin-top: 10px;
            display: block;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Proyecto</h1>
        <form action="{{ url('/proyectos') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" required></textarea>

            <label for="responsable">Responsable:</label>
            <input type="text" name="responsable" id="responsable" required>

            <label for="fecha_inicio">Fecha de inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" required>

            <label for="monto">Monto:</label>
            <input type="number" name="monto" id="monto" required>

            <button type="submit">Crear Proyecto</button>
        </form>
    </div>
</body>
</html>







