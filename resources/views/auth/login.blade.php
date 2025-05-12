<!-- login.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">Iniciar Sesión</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input type="email" name="email" required class="mt-1 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input type="password" name="password" required class="mt-1 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
        Ingresar
      </button>
    </form>
  </div>
</body>
</html>
