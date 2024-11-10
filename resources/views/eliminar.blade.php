<?php

/** @var \App\Models\Novedad[] $novedad */
?>

<x-layout>
    <x-slot:title>Confimación para eliminar: {{ $novedad->titulo }}</x-slot:title>

    <h1 class="visually-hidden mb-3">Confirmación para eliminar</h1>

    <div class="container">
        <a href="{{ route('novedades.admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <p class="mb-3 h2 mt-4">Confimación para eliminar: <b>{{ $novedad->titulo }}</b>.</p>
        <p>¿Desea continuar?</p>

        <form action="{{ route('novedades.confirmar-eliminar', ['id' => $novedad->novedades_id]) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Sí, eliminar <b>{{ $novedad->titulo }}</b></button>
        </form>
    </div>


    <div class="container mb-4 mt-5">
        <div class="row">
            <div class="col-5">
                @if($novedad->portada && Storage::exists($novedad->portada))
                <img src="{{ Storage::url($novedad->portada) }}" alt="{{ $novedad->descripcion_portada }}" class="img-fluid w-75">
                @else
                <img src="{{ asset('storage/imagenes/' . 'no-imagen.jpg') }}" alt="No hay imagen" class="img-fluid w-75">
                @endif
            </div>
            <div class="col-7">
                <p class="mb-3 h2">{{ $novedad->titulo }}</p>
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
        </div>
    </div>

</x-layout>