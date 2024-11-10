<?php

/** @var \Illuminate\Support\ViewErrorBag $errors */

// dd($errors);

?>

<x-layout>
    <x-slot:title>Crear Servicio</x-slot:title>

    <h1 class="visually-hidden">Crear un Servicio</h1>

    <div class="container">
        <a href="{{ route('servicios.admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h2 class="center text-start">Crear un Servicio</h2>
        @if($errors->any())
        <div class="alert alert-danger mt-3">Hay errores en los datos ingresados</div>
        @endif

        <form action="{{ route('servicios.guardar') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Título</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" @error('nombre') aria-errormessage="error-nombre" @enderror>

                @error('nombre')
                <div class="text-danger bi bi-x" id="error-nombre">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" @error('descripcion') aria-errormessage="error-info" @enderror>{{ old('descripcion') }}</textarea>

                @error('descripcion')
                <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="condiciones" class="form-label">Condiciones</label>
                <textarea id="condiciones" name="condiciones" class="form-control" value="{{ old('condiciones') }}" @error('condiciones') aria-errormessage="error-info" @enderror>{{ old('condiciones') }}</textarea>

                @error('condiciones')
                <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="portada" class="form-label">Portada</label>
                <input type="file" id="portada" name="portada" class="form-control">
            </div>

            <div class="mb-3">
                <label for="descripcion_portada" class="form-label">Descripción de la portada</label>
                <input type="text" id="descripcion_portada" name="descripcion_portada" class="form-control" value="{{ old('descripcion_portada') }}">
            </div>

            <div class="row">
                <div class="col">
                    <label for="tarifa_acceso" class="form-label">Tarifa de acceso</label>
                    <input type="number" id="tarifa_acceso" name="tarifa_acceso" class="form-control" value="{{ old('tarifa_acceso') }}" @error('tarifa_acceso') aria-errormessage="error-tarifa_acceso" @enderror>

                    @error('tarifa_acceso')
                    <div class="text-danger bi bi-x" id="error-tarifa_acceso">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="tarifa_socios" class="form-label">Tarifa de socio</label>
                    <input type="number" id="tarifa_socios" name="tarifa_socios" class="form-control" value="{{ old('tarifa_socios') }}" @error('tarifa_socios') aria-errormessage="error-tarifa_socios" @enderror>

                    @error('tarifa_socios')
                    <div class="text-danger bi bi-x" id="error-tarifa_socios">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn boton mb-3 mt-3">Agregar servicio</button>
        </form>
    </div>

</x-layout>