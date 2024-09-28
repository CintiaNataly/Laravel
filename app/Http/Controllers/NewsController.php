<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {

        $novedades = Novedad::all();

        // dd($novedades);

        return view('novedades');
    }
}
