<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private array $validaciones = [
        'titulo' => 'required|min:3',
        'categoria' => 'required',
        'info_abreviada'  => 'required',
        'descripcion'  => 'required',
    ];


    private array $mensajesValidacion = [
        'titulo.required' => 'El titulo es obligatorio',
        'titulo.min' => 'El titulo debe tener al menos 3 caracteres',
        'categoria.required' => 'La categoria es obligatoria',
        'info_abreviada.required' => 'La descripción corta es obligatoria',
        'descripcion.required' => 'La descripción es obligatoria'
    ];


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


    public function crear()
    {
        return view('crear');
    }


    public function almacenar(Request $request)
    {
        $data = $request->except(['_token']);

        $request->validate($this->validaciones, $this->mensajesValidacion);

        $data['fecha_publicacion'] = now();

        if ($request->hasFile('portada')) {
            $data['portada'] = $request->file('portada')->store('imagenes');
        }

        Novedad::create($data);

        return redirect(url('admin/novedades'))->with('feedback.message-sucess', 'La novedad "' . $data['titulo'] . '" se publico con éxito!');
    }


    public function editar(int $id)
    {
        return view('editar', [
            'novedad' => Novedad::findOrFail($id)
        ]);
    }


    public function actualizar(Request $request, int $id)
    {
        $request->validate($this->validaciones, $this->mensajesValidacion);

        $novedad = Novedad::findOrFail($id);

        $data = $request->except('_token');
        $currentPortada = $novedad->portada;

        if ($request->hasFile('portada')) {
            $data['portada'] = $request->file('portada')->store('imagenes');
        }

        $novedad->update($data);

        if ($request->hasFile('portada') && $currentPortada && Storage::exists($currentPortada)) {
            Storage::delete($currentPortada);
        }

        return redirect(url('admin/novedades'))->with('feedback.message-sucess', 'La novedad "' . e($novedad->titulo) . '" se editó con éxito!');
    }


    public function eliminar(int $id)
    {
        return view('eliminar', [
            'novedad' => Novedad::findOrFail($id)
        ]);
    }


    public function destruir(int $id)
    {

        $novedad = Novedad::findOrFail($id);

        $novedad->delete();

        if ($novedad->portada && Storage::exists($novedad->portada)) {
            Storage::delete($novedad->portada);
        }

        return redirect(url('admin/novedades'))->with('feedback.message-sucess', 'La novedad "' . e($novedad->titulo) . '" se eliminó con éxito!');
    }
}
