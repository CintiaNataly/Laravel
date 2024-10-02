<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() {
        return view('contactanos');
    }

    public function contacto()
    {
        // Solo devuelves la vista con un mensaje flash
        return redirect()->route('contactanos')->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
    
}



