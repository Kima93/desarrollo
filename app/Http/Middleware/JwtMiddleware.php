<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            // Intenta obtener y autenticar al usuario con el token
            JWTAuth::parseToken()->authenticate();
        } catch (JWTException $e) {
            // Si el token no es proporcionado o es inválido
            return response()->json(['error' => 'Token no proporcionado o inválido'], 401);
        }

        // Si el token es válido, permite que la solicitud continúe
        return $next($request);
    }
}


