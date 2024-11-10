<?php

/** @var \App\Models $servicio */
/** @var \Illuminate\Support\ViewErrorBag $errors */

// dd($errors);

?>

<x-layout>
    <x-slot:title>Editar "{{ $servicio->nombre }}"</x-slot:title>

    <h1 class="visually-hidden">Editar "{{ $servicio->nombre }}"</h1>

    <div class="container">
        <a href="{{ route('servicios.admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h2 class="center text-start">Editar "<b>{{ $servicio->nombre }}</b>"</h2>
        @if($errors->any())
        <div class="alert alert-danger mt-3">Hay errores en los datos ingresados</div>
        @endif

        <form action="{{ route('servicios.actualizar', ['id' => $servicio->servicios_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <div class="col">
                    <label for="nombre" class="form-label">Título</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $servicio->nombre ) }}" @error('nombre') aria-errormessage="error-nombre" @enderror>

                    @error('nombre')
                    <div class="text-danger bi bi-x" id="error-nombre">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" @error('descripcion') aria-errormessage="error-descripcion" @enderror>{{ old('descripcion', $servicio->descripcion) }}</textarea>

                    @error('descripcion')
                    <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="condiciones" class="form-label">Condiciones</label>
                    <textarea id="condiciones" name="condiciones" class="form-control" @error('condiciones') aria-errormessage="error-condiciones" @enderror>{{ old('condiciones', $servicio->condiciones) }}</textarea>


                    @error('condiciones')
                    <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="tarifa_acceso" class="form-label">Tarifa de acceso</label>
                        <input type="number" id="tarifa_acceso" name="tarifa_acceso" class="form-control" value="{{ old('tarifa_acceso', $servicio->tarifa_acceso ) }}" @error('tarifa_acceso') aria-errormessage="error-tarifa_acceso" @enderror>

                        @error('tarifa_acceso')
                        <div class="text-danger bi bi-x" id="error-tarifa_acceso">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="tarifa_socios" class="form-label">Tarifa de socio</label>
                        <input type="number" id="tarifa_socios" name="tarifa_socios" class="form-control" value="{{ old('tarifa_socios', $servicio->tarifa_socios ) }}" @error('tarifa_socios') aria-errormessage="error-tarifa_socios" @enderror>

                        @error('tarifa_socios')
                        <div class="text-danger bi bi-x" id="error-tarifa_socios">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        @if($servicio->portada && Storage::exists($servicio->portada))
                        <img src="{{ Storage::url($servicio->portada) }}" alt="{{ $servicio->descripcion_portada }}" class="img-fluid w-50">
                        @else
                        <img src="{{ asset('storage/imagenes/' . 'no-imagen.jpg') }}" alt="No hay imagen" class="img-fluid w-50">
                        @endif
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <label for="portada" class="form-label">Portada</label>
                            <input type="file" id="portada" name="portada" class="form-control">
                        </div>
                        <div>
                            <label for="descripcion_portada" class="form-label">Descripción de la portada</label>
                            <input type="text" id="descripcion_portada" name="descripcion_portada" class="form-control" value="{{ old('descripcion_portada', $servicio->descripcion_portada) }}">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn boton mb-3 mt-3">Actualizar los datos</button>
        </form>
    </div>

</x-layout>