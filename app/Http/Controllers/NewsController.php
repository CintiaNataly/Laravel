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
        $novedad = Novedad::findOrFail($id);

        // dd($novedad);

        return view('show', [
            'novedad' => $novedad,
        ]);
    }


    public function admin_novedades() {

        $novedades = Novedad::all();


        return view('admin_novedades', [
            'novedades' => $novedades,
        ]);
    }


    public function create() {
        return view('create');
    } 

}
