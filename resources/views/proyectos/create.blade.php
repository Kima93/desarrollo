<!-- resources/views/proyectos/create.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .form-container { max-width: 500px; margin: 0 auto; background: #f7f7f7; padding: 20px; border-radius: 8px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; }
        .form-group input { width: 100%; padding: 8px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc; }
        .btn { padding: 10px 20px; font-size: 16px; color: white; background-color: #4CAF50; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Crear Proyecto</h2>
        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable</label>
                <input type="text" id="responsable" name="responsable" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="number" id="monto" name="monto" step="0.01" required>
            </div>
            <button type="submit" class="btn">Crear Proyecto</button>
        </form>
    </div>

</body>
</html>
