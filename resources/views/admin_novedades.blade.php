<?php

/** @var \App\Models\Novedad[]|\Illuminate\Database\Eloquent\Collection $novedades */
?>

<x-layout>
    <x-slot:title>Admin Novedades</x-slot:title>

    <div class="container">

        <h1 class="mb-3">Admin Novedades</h1>
        <h2 class="center">Admin Novedades</h2>

        <a href="{{ url('admin/novedades/publicar') }}" class="btn boton mb-3 mt-3">Agregar una Novedad</a>


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
                            <a href="{{ url('/admin/novedades/' . $novedad->novedades_id . '/eliminar') }}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</x-layout>