<?php

use App\Http\Middleware\CheckUserRol;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Middleware global de redirección de invitados
        $middleware->redirectGuestsTo(function(){
            session()->flash('feedback.message-warning', 'Debes iniciar sesión para continuar.');
            return route('auth.showLogin');
        });
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();