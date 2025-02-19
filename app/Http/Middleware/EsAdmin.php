<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y tiene el rol de "admin"
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Si no es admin, redirige a la página de inicio con un mensaje de error
        return redirect('/')->with('adminerror', 'Acceso denegado. No tienes permisos de administrador.');
    }
}
