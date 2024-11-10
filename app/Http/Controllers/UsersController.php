<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    private array $validaciones = [
        'name' => 'required|min:3',
        'email' => 'required',
        'password'  => 'required',
        'servicio_fk' => 'nullable|exists:servicios,servicios_id'
    ];


    private array $validacionRegistro = [
        'name' => 'required|min:3',
        'email' => 'required',
        'password'  => 'required'
    ];


    private array $validacionesUsuario = [
        'name' => 'required|min:3',
        'email' => 'required',
        'servicio_fk' => 'nullable|exists:servicios,servicios_id'
    ];


    private array $mensajesValidacion = [
        'name.required' => 'El nombre es obligatorio',
        'name.min' => 'El nombre debe tener al menos 3 caracteres',
        'email.required' => 'El e-mail es obligatorio',
        'password.required' => 'Las contraseña es obligatoria'
    ];


    public function index()
    {
        $users = User::all();

        return view('usuarios', compact('usuarios'));
    }


    public function admin_usuarios()
    {
        $usuarios = User::with('servicio')->where('rol', 'administrador')->get();

        return view('admin_usuarios', [
            'usuarios' => $usuarios
        ]);
    }


    public function ver_usuario(int $id)
    {
        return view('ver_usuario', [
            'usuario' => User::findOrFail($id),
            'servicios' => Servicio::all()
        ]);
    }


    public function ver_perfil(int $id)
    {
        return view('ver_perfil', [
            'usuario' => User::findOrFail($id),
            'servicios' => Servicio::all()
        ]);
    }


    public function confirmar_reserva(int $id)
    {
        $user = Auth::user();
        $usuario = User::findOrFail($user->id);

        $usuario->servicio_fk = $id;
        $usuario->save();

        $servicio = Servicio::findOrFail($id);

        return view('confirmar_reserva', [
            'servicio' => $servicio,
            'usuario' => $usuario
        ]);
    }


    public function registrar_usuario()
    {
        return view('registrar_usuario');
    }


    public function almacenar_usuario_registrado(Request $request)
    {
        $request->validate($this->validacionRegistro, $this->mensajesValidacion);

        $usuario = new User;
        $usuario->name            = $request->input('name');
        $usuario->email           = $request->input('email');
        $usuario->password        = bcrypt($request->input('password'));
        $usuario->rol             = 'usuario';
        $usuario->save();

        return redirect(url('inicio-sesion'))->with('feedback.message-sucess', 'Usuario "' . $request->input('name') . '" se creó con éxito!');
    }


    public function crear_usuario()
    {
        return view('crear_usuario', [
            'servicios' => Servicio::all(),
        ]);
    }


    public function almacenar_usuario(Request $request)
    {
        // Validaciones
        $request->validate($this->validaciones, $this->mensajesValidacion);

        $usuario = new User;
        $usuario->name            = $request->input('name');
        $usuario->email           = $request->input('email');
        $usuario->password        = bcrypt($request->input('password'));
        $usuario->rol             = 'administrador';
        $usuario->save();

        return redirect(url('admin/usuarios'))->with('feedback.message-sucess', 'El usuario "' . $request->input('name') . '" se creó con éxito!');
    }


    public function editar_usuario(int $id)
    {
        return view('editar_usuario', [
            'usuario' => User::findOrFail($id),
            'servicios' => Servicio::all()
        ]);
    }


    public function actualizar_usuario(Request $request, int $id)
    {
        $request->validate($this->validacionesUsuario, $this->mensajesValidacion);

        $usuario = User::findOrFail($id);

        $data = $request->except('_token');
        $usuario->name = $request->input('name');

        if ($request->input('password') != '') {
            $usuario->password = bcrypt($request->input('password'));
        }

        $usuario->servicio_fk = $request->input('servicio_fk');
        $usuario->save();

        return redirect(url('admin/usuarios'))->with('feedback.message-sucess', 'El usuario "' . e($usuario->name) . '" se editó con éxito!');
    }


    public function eliminar_usuario(int $id)
    {
        return view('eliminar_usuario', [
            'usuario' => User::findOrFail($id)
        ]);
    }


    public function destruir_usuario(int $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect(url('admin/usuarios'))->with('feedback.message-sucess', 'El usuario "' . e($usuario->name) . '" se eliminó con éxito!');
    }
}
