<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;



class AuthController extends Controller
{
    // Mostrar formulario de registro (para navegador)
    public function showRegister()
    {
        return view('auth.register');
    }

    // Registrar usuario (para API/Postman)
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return response()->json([
            'message' => 'Usuario registrado con éxito',
            'user' => $user
        ], 201);
    }
    public function login(Request $request)
    {
        // Validación de datos
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Intentar autenticar al usuario
        if (!$token = JWTAuth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return response()->json(['error' => 'Credenciales incorrectas'], 401);
        }

        // Si se autentica correctamente, devuelve el token
        return response()->json([
            'message' => 'Inicio de sesión exitoso',
            'token' => $token
        ]);
    }

}
