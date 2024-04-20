<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // Verifica se o usuário está autenticado
        if (Auth::guard($guard)->check()) {
            // Se estiver autenticado, redireciona para a página inicial
            return redirect('/');
        }

        // Caso contrário, permite que a requisição continue
        return $next($request);
    }
}
