<?php

/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \Illuminate\Databas\Eloquent\Collection<int, \App\Models\User> $usuarios */

// dd($errors);

?>

<x-layout>
    <x-slot:title>EditarUsuarios Administrador</x-slot:title>

    <h1 class="visually-hidden">Editar un Usuarios Administrador</h1>

    <div class="container">
        <a href="{{ route('usuarios.admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h2 class="center text-start">Editar un Usuarios Administrador</h2>
        @if($errors->any())
        <div class="alert alert-danger mt-3">Hay errores en los datos ingresados</div>
        @endif

        <form action="{{ route('usuarios.actualizar', ['id' => $usuario->id]) }}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $usuario->name ) }}" @error('name') aria-errormessage="error-name" @enderror>

                    @error('name')
                    <div class="text-danger bi bi-x" id="error-name">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $usuario->email ) }}" @error('email') aria-errormessage="error-info" @enderror>

                    @error('email')
                    <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" @error('password') aria-errormessage="error-info" @enderror>

                    @error('password')
                    <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn boton mb-3 mt-3">Editar usuario</button>
        </form>


    </div>
</x-layout>