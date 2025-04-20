<!-- resources/views/proyectos/delete.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .container { text-align: center; }
        .btn { padding: 10px 20px; font-size: 16px; color: white; background-color: red; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="container">
        <h2>¿Estás seguro de que deseas eliminar este proyecto?</h2>
        <form action="{{ route('proyectos.destroy', $proyecto['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Eliminar Proyecto</button>
        </form>
    </div>

</body>
</html>
