<?php

/** @var \App\Models\Novedad[]|\Illuminate\Database\Eloquent\Collection $novedades */
?>

<x-layout>

    <x-slot:title>Novedades</x-slot:title>
    <div class="w-100">
        <img src="img/banner-novedades.png" alt="Banner AeroAsist" class="d-block w-100">
    </div>
    <h1 class="nomostrar mb-3">Novedades</h1>


    <div class="container mb-4">
        <div class="row">
            @foreach ($novedades as $novedad)
            <div class="col-md-6">
                <div class="card mt-5 cardModificada">
                    <div class="card-header tituloCard">{{ $novedad->titulo }}</div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <footer class="blockquote-footer">
                                <cite title="Source Title">Fecha de publicación: {{ $novedad->fecha_publicacion }}</cite>
                                <p>Categoria: {{ $novedad->categoria }}</p>
                            </footer>
                            <p>{{ $novedad->info_abreviada }}</p>
                            <a href="{{ route('novedades.show', ['id' => $novedad->novedades_id]) }}" class="btn boton">Leer más</a>
                        </blockquote>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>




</x-layout>