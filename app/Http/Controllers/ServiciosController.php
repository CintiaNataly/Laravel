<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    private array $validaciones = [
        'nombre' => 'required|min:3',
        'descripcion' => 'required',
        'condiciones'  => 'required',
        'tarifa_acceso'  => 'required',
        'tarifa_socios'  => 'required',
    ];


    private array $mensajesValidacion = [
        'nombre.required' => 'El nombre es obligatorio',
        'nombre.min' => 'El nombre debe tener al menos 3 caracteres',
        'descripcion.required' => 'La descripcion es obligatoria',
        'condiciones.required' => 'Las condiciones corta es obligatoria',
        'tarifa_acceso.required' => 'La tarifa de acceso es obligatoria',
        'tarifa_socios.required' => 'La tarifa de socio es obligatoria'
    ];


    public function index()
    {
        $servicios = Servicio::all();

        return view('servicios', compact('servicios'));
    }


    public function admin_servicios()
    {
        $servicios = Servicio::all();

        return view('admin_servicios', [
            'servicios' => $servicios,
        ]);
    }


    public function crear_servicio()
    {
        return view('crear_servicio');
    }


    public function almacenar_servicio(Request $request)
    {
        $data = $request->except(['_token']);

        $request->validate($this->validaciones, $this->mensajesValidacion);

        if ($request->hasFile('portada')) {
            $data['portada'] = $request->file('portada')->store('imagenes');
        }

        Servicio::create($data);

        return redirect(url('admin/servicios'))->with('feedback.message-sucess', 'El servicio "' . $data['nombre'] . '" se publico con éxito!');
    }


    public function editar_servicio(int $id)
    {
        return view('editar_servicio', [
            'servicio' => Servicio::findOrFail($id)
        ]);
    }


    public function actualizar_servicio(Request $request, int $id)
    {
        $request->validate($this->validaciones, $this->mensajesValidacion);

        $servicio = Servicio::findOrFail($id);

        $data = $request->except('_token');
        $currentPortada = $servicio->portada;

        if ($request->hasFile('portada')) {
            $data['portada'] = $request->file('portada')->store('imagenes');
        }

        $servicio->update($data);

        if ($request->hasFile('portada') && $currentPortada && Storage::exists($currentPortada)) {
            Storage::delete($currentPortada);
        }

        return redirect(url('admin/servicios'))->with('feedback.message-sucess', 'La servicio "' . e($servicio->nombre) . '" se editó con éxito!');
    }


    public function eliminar_servicio(int $id)
    {
        return view('eliminar_servicio', [
            'servicio' => Servicio::findOrFail($id)
        ]);
    }


    public function destruir_servicio(int $id)
    {
        $servicio = Servicio::findOrFail($id);

        $servicio->delete();

        if ($servicio->portada && Storage::exists($servicio->portada)) {
            Storage::delete($servicio->portada);
        }

        return redirect(url('admin/servicios'))->with('feedback.message-sucess', 'El servicio "' . e($servicio->nombre) . '" se eliminó con éxito!');
    }
}
