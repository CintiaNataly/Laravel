<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {

        $novedades = Novedad::all();

        // dd($novedades);

        return view('novedades', [
            'novedades' => $novedades,
        ]);
    }


    public function show(int $id){
        $novedad = Novedad::find($id);

        // dd($novedad);

        return view('show', [
            'novedad' => $novedad,
        ]);
    }
}
