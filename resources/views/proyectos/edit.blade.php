<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Proyecto: {{ $proyecto->nombre }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
  <div class="bg-white p-6 rounded shadow-md max-w-md mx-auto">
    <h2 class="text-2xl font-bold mb-4">Editar Proyecto: {{ $proyecto->nombre }}</h2>
    <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}">
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label class="block text-gray-700">Nombre del proyecto</label>
        <input type="text" name="nombre" value="{{ $proyecto->nombre }}" required class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
      </div>
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
    </form>
  </div>
</body>
</html>
