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
            'titulo' => 'required|min:3',
            'fecha_publicacion' => 'required|',
            'categoria' => 'required',
            'info_abreviada'  => 'required',
            'descripcion'
        ],[
            'titulo.required' => 'El titulo es obligatorio',
            'titulo.min' => 'El titulo debe tener al menos 3 caracteres',
            'fecha_publicacion.required' => 'La fecha de publicación es obligatoria',
            'categoria.required' => 'La categoria es obligatoria',
            'info_abreviada.required' => 'La descripción corta es obligatoria'
        ]);



        Novedad::create($data);

        return redirect(url('admin/novedades'))->with('feedback.message', 'La novedad "' . $data['titulo'] . '" se publico con éxito!');
    }


    public function eliminar(int $id){
        return view('eliminar', [
            'novedad' => Novedad::findOrFail($id),
        ]);
    }
}
