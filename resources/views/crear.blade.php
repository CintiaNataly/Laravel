<?php

/** @var \Illuminate\Support\ViewErrorBag $errors */

// dd($errors);

?>

<x-layout>
    <x-slot:title>Crear Novedad</x-slot:title>

    <h1 class="visually-hidden">Crear una Novedad</h1>

    <div class="container">
        <a href="{{ route('novedades.admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h2 class="center text-start">Crear una Novedad</h2>

        @if($errors->any())
        <div class="alert alert-danger mt-3">Hay errores en los datos ingresados</div>
        @endif

        <form action="{{ route('novedades.guardar') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <div class="col">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo') }}" @error('titulo') aria-errormessage="error-titulo" @enderror>

                    @error('titulo')
                    <div class="text-danger bi bi-x" id="error-titulo">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" id="categoria" name="categoria" class="form-control" value="{{ old('categoria') }}" @error('categoria') aria-errormessage="error-categoria" @enderror>

                    @error('categoria')
                    <div class="text-danger bi bi-x" id="error-categoria">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="portada" class="form-label">Portada</label>
                <input type="file" id="portada" name="portada" class="form-control">
            </div>

            <div class="mb-3">
                <label for="descripcion_portada" class="form-label">Descripción de la portada</label>
                <input type="text" id="descripcion_portada" name="descripcion_portada" class="form-control" value="{{ old('descripcion_portada') }}">
            </div>

            <div class="mb-3">
                <label for="info_abreviada" class="form-label">Información breve</label>
                <input type="text" id="info_abreviada" name="info_abreviada" class="form-control" value="{{ old('info_abreviada') }}" @error('info_abreviada') aria-errormessage="error-info-breve" @enderror>

                @error('info_abreviada')
                <div class="text-danger bi bi-x" id="error-info-breve">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" @error('descripcion') aria-errormessage="error-info" @enderror>{{ old('descripcion') }}</textarea>

                @error('descripcion')
                <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn boton mb-3 mt-3">Agregar</button>
        </form>
    </div>

</x-layout>