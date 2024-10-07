<?php

/** @var \App\Models\Novedad[] $novedad */
?>

<x-layout>
    <x-slot:title>{{ $novedad->titulo }}</x-slot:title>

    <div id="carouselExample" class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/banner-novedades.png') }}" alt="Banner AeroAsist" class="d-block w-100">
            </div>
        </div>
    </div>

    <h1 class="nomostrar mb-3">Novedades</h1>


    <div class="container mb-4 mt-5">
        <h2 class="mb-3">{{ $novedad->titulo }}</h2>
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
            </div>
        </div>
    </div>
</x-layout>