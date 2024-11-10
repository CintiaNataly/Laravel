<?php

/** @var \App\Models\Novedad[]|\Illuminate\Database\Eloquent\Collection $novedades */
?>

<x-layout>
    <x-slot:title>Administrar Novedades</x-slot:title>

    <div class="container">
        <a href="{{ route('admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h1 class="visually-hidden mb-3">Administrar Novedades</h1>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="center text-start mb-2">Administrar Novedades</h2>
            <a href="{{ route('novedades.crear') }}" class="btn boton mb-3 mt-3 ms-3 w-50">Agregar una Novedad</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Categoría</th>
                    <th>Creación</th>
                    <th>Info breve</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($novedades as $novedad)
                <tr>
                    <td>{{ $novedad->novedades_id }}</td>
                    <td>{{ $novedad->titulo }}</td>
                    <td>{{ $novedad->categoria }}</td>
                    <td>{{ $novedad->fecha_publicacion }}</td>
                    <td>{{ $novedad->info_abreviada }}</td>
                    <td>{{ $novedad->descripcion }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('novedades.editar', ['id' => $novedad->novedades_id]) }}" class="btn btn-secondary">Editar</a>
                            <a href="{{ route('novedades.eliminar', ['id' => $novedad->novedades_id]) }}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>