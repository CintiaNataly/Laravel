<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() {
        return view('contactanos');
    }

    public function contacto(Request $request)
    {
        return redirect()->route('contactanos')->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
}
