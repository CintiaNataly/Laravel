<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->rol == 'administrador') {
                return $next($request);
            }

            if ($user->rol == 'usuario') {
                return redirect()
                    ->route('inicio')
                    ->with('feedback.message-success', 'sos usuario');
            }
        }
    }
}
