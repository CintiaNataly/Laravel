<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::where('rol', 'usuario')->get();

        return view('admin', [
            'usuarios' => $usuarios
        ]);
    }
}
