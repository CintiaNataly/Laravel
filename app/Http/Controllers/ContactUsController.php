<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    private array $validaciones = [
        'nombre' => 'required|min:3',
        'email' => 'required',
        'telefono'  => 'required'
    ];


    private array $mensajesValidacion = [
        'nombre.required' => 'El nombre es obligatorio',
        'nombre.min' => 'El nombre debe tener al menos 3 caracteres',
        'email.required' => 'El e-mail es obligatorio',
        'telefono' => 'El telefono es obligatorio'
    ];


    public function index()
    {
        return view('contactanos');
    }


    public function contacto(Request $request)
    {
        $request->validate($this->validaciones, $this->mensajesValidacion);

        return redirect()->route('contactanos')->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
}
