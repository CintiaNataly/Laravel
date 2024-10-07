<?php

/** @var \App\Models\Novedad[] $novedad */
?>

<x-layout>
    <x-slot:title>{{ $novedad->titulo }}</x-slot:title>

    <h1 class="nomostrar mb-3">Novedades</h1>

    <div class="servicios-section">
    <h2 class="titulo-servicios mb-3 fs-1 fst-italic"><span>{{ $novedad->titulo }}</span></h2>    
    <div class="linea-amarilla"></div>
    </div>

   


    <div class="container mb-4 mt-5">
        <div class="row">
            <div class="card cardModificada">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <footer class="blockquote-footer">
                            <cite title="Source Title">Fecha de publicación: {{ $novedad->fecha_publicacion }} - Categoria: {{ $novedad->categoria }}</cite>
                        </footer>
                        <p>{{ $novedad->info_abreviada }}</p>

                        <div>{{ $novedad->descripcion }}</div>
                    </blockquote>
                </div>
                <a href="{{ route('novedades') }}" class="btn boton">Volver a novedades</a>
            </div>
        </div>
    </div>
</x-layout>