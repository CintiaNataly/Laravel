<?php

/** @var \App\Models\Novedad[]|\Illuminate\Database\Eloquent\Collection $novedades */
?>

<x-layout>
    <x-slot:title>Admin Novedades</x-slot:title>

    <div class="container">

        <h1 class="nomostrar mb-3">Admin Novedades</h1>
        <h2 class="center">Admin Novedades</h2>

        <a href="{{ route('novedades.crear') }}" class="btn boton mb-3 mt-3">Agregar una Novedad</a>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Creacion</th>
                    <th>Info breve</th>
                    <th>Descripcion</th>
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