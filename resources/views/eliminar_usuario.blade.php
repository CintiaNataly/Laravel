<?php

/** @var \App\Models\User[] $usuario */
?>

<x-layout>
    <x-slot:title>Confimación para eliminar: {{ $usuario->name }}</x-slot:title>

    <h1 class="visually-hidden mb-3">Confirmación para eliminar</h1>

    <div class="container">
        <a href="{{ route('usuarios.admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <p class="mb-3 h2 mt-4">Confimación para eliminar: <b>{{ $usuario->name }}</b>.</p>
        <p>¿Desea continuar?</p>

        <form action="{{ route('usuarios.confirmar-eliminar', ['id' => $usuario->id]) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Sí, eliminar <b>{{ $usuario->name }}</b></button>
        </form>
    </div>


    <div class="container mb-4 mt-5">
        <div class="col-7">
            <p class="mb-3 h2">{{$usuario->name }}</p>
            <div class="row">
                <div class="card cardModificada">
                    <div class="card-body">
                        <p>E-mail: {{ $usuario->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>