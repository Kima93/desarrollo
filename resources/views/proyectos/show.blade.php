<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Proyecto: {{ $proyecto->nombre }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
  <div class="bg-white p-6 rounded shadow-md max-w-md mx-auto">
    <h2 class="text-2xl font-bold mb-4">Proyecto: {{ $proyecto->nombre }}</h2>
    <p><strong>ID:</strong> {{ $proyecto->id }}</p>
    <p><strong>Fecha de creación:</strong> {{ $proyecto->created_at }}</p>
    <p><strong>Última actualización:</strong> {{ $proyecto->updated_at }}</p>

    <!-- Enlace para volver a la lista de proyectos -->
    <a href="{{ route('proyectos.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
      Volver a la lista
    </a>
  </div>
</body>
</html>
