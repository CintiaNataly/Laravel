<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(Request $request)
    {
        return view('auth.login');
    }

    public function  doLogin(Request $request)
    {
        $crendentials = $request->only(['email', 'password']);

        if(!Auth::attempt($crendentials)) {
            return redirect()
                ->route('auth.showLogin')
                ->with('feedback.message-error', 'Este usuario y/o contraseña no pertenece a nuestra base de datos.')
                ->withInput();

        }

        return redirect()
        ->route('novedades.admin')
        ->with('feedback.message-sucess', 'Haz iniciado sesión con exito.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.showLogin')
            ->with('feedback.message-sucess', 'Haz cerrado sesión, adios!');
    }

   
}