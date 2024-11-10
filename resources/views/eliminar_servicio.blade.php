<?php

/** @var \App\Models\Servicio[] $servicio */
?>

<x-layout>
    <x-slot:title>Confimación para eliminar: {{ $servicio->nombre }}</x-slot:title>

    <h1 class="visually-hidden mb-3">Confirmación para eliminar</h1>

    <div class="container">
        <a href="{{ route('servicios.admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <p class="mb-3 h2 mt-4">Confimación para eliminar: <b>{{ $servicio->nombre }}</b>.</p>
        <p>¿Desea continuar?</p>

        <form action="{{ route('servicios.confirmar-eliminar', ['id' => $servicio->servicios_id]) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Sí, eliminar <b>{{ $servicio->nombre }}</b></button>
        </form>
    </div>


    <div class="container mb-4 mt-5">
        <div class="row">
            <div class="col-5">
                @if($servicio->portada && Storage::exists($servicio->portada))
                <img src="{{ Storage::url($servicio->portada) }}" alt="{{ $servicio->descripcion_portada }}" class="img-fluid w-75">
                @else
                <img src="{{ asset('storage/imagenes/' . 'no-imagen.jpg') }}" alt="No hay imagen" class="img-fluid w-75">
                @endif
            </div>
            <div class="col-7">
                <p class="mb-3 h2">{{ $servicio->nombre }}</p>
                <div class="row">
                    <div class="card cardModificada">
                        <div class="card-body">
                            <p>Descripción: {{ $servicio->descripcion }}</p>
                            <p>Condiciones: {{ $servicio->condiciones }}</p>
                            <p>Tarifa de acceso: {{ $servicio->tarifa_acceso }}</p>
                            <p>Tarifa de socio: {{ $servicio->tarifa_socios }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>