<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $novedades = Novedad::all();

        return view('novedades', [
            'novedades' => $novedades,
        ]);
    }


    public function show(int $id)
    {
        $novedad = Novedad::findOrFail($id);

        return view('show', [
            'novedad' => $novedad,
        ]);
    }


    public function admin_novedades()
    {
        $novedades = Novedad::all();

        return view('admin_novedades', [
            'novedades' => $novedades,
        ]);
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        // Validaciones

        $request->validate([
            'titulo' => 'required|min:5',
            'fecha_publicacion' => 'required|',
            'categoria' => 'required',
            'info_abreviada'  => 'required',
            'descripcion'

        ]);



        Novedad::create($data);

        return redirect(url('admin/novedades'))->with('feedback.message', 'La novedad "' . $data['titulo'] . '" se publico con éxito!');
    }
}
