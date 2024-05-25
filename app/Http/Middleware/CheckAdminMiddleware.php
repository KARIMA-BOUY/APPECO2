<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { {
        // Votre logique pour vérifier si l'utilisateur est un administrateur
        if (auth()->user() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        // Si l'utilisateur n'est pas un administrateur, vous pouvez rediriger ou renvoyer une réponse d'erreur
        return redirect()->route('home')->with('error', 'Permission denied.');
    }
    }
}
