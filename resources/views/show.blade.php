<?php

/** @var \App\Models\Novedad[] $novedad */

?>

<x-layout>
    <x-slot:title>{{ $novedad->titulo }}</x-slot:title>

    <h1 class="visually-hidden mb-3">Novedades</h1>

    <div class="servicios-section">
        <h2 class="titulo-servicios mb-3 fs-1 fst-italic"><span>{{ $novedad->titulo }}</span></h2>
        <div class="linea-amarilla"></div>
    </div>

    <div class="container mb-4 mt-5">
        <div class="row">
            <div class="card cardModificada">
                <div class="card-body">
                    <div class="mb-3">
                        @if($novedad->portada && Storage::exists($novedad->portada))
                        <img src="{{ Storage::url($novedad->portada) }}" alt="{{ $novedad->descripcion_portada }}" class="img-fluid w-50">
                        @else
                        <img src="{{ asset('storage/imagenes/' . 'no-imagen.jpg') }}" alt="No hay imagen" class="img-fluid w-50">
                        @endif
                    </div>
                    <blockquote class="blockquote mb-0">
                        <footer class="blockquote-footer">
                            <cite title="Source Title">Fecha de publicación: {{ now()->format('d-m-Y') }} - Categoria: {{ $novedad->categoria }}</cite>
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