<?php
/** @var \App\Models $novedad */
/** @var \Illuminate\Support\ViewErrorBag $errors */

// dd($errors);

?>

<x-layout>

    <x-slot:title>Editar "{{ $novedad->titulo }}"</x-slot:title>
    <h1 class="nomostrar mb-3">Editar "{{ $novedad->titulo }}"</h1>


    <div class="container">
        <h2 class="center">Editar "<b>{{ $novedad->titulo }}</b>"</h2>

        @if($errors->any())
        <div class="alert alert-danger mt-3">Hay errores en los datos ingresados</div>
        @endif

        <form action="{{ route('novedades.actualizar', ['id' => $novedad->novedades_id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo', $novedad->titulo ) }}" @error('titulo') aria-errormessage="error-titulo" @enderror>

                @error('titulo')
                <div class="text-danger bi bi-x" id="error-titulo">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 row">
                <div class="col">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" id="categoria" name="categoria" class="form-control" value="{{ old('categoria', $novedad->categoria) }}" @error('categoria') aria-errormessage="error-categoria" @enderror>

                    @error('categoria')
                    <div class="text-danger bi bi-x" id="error-categoria">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="fecha_publicacion" class="form-label">Creación</label>
                    <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="form-control" value="{{ old('fecha_publicacion', $novedad->fecha_publicacion) }}" @error('fecha_publicacion') aria-errormessage="error-creacion" @enderror>

                    @error('fecha_publicacion')
                    <div class="text-danger bi bi-x" id="error-creacion">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="info_abreviada" class="form-label">Información breve</label>
                <input type="text" id="info_abreviada" name="info_abreviada" class="form-control" value="{{ old('info_abreviada', $novedad->info_abreviada) }}" @error('info_abreviada') aria-errormessage="error-info-breve" @enderror>

                @error('info_abreviada')
                <div class="text-danger bi bi-x" id="error-info-breve">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" @error('descripcion') aria-errormessage="error-info" @enderror>{{ old('descripcion', $novedad->descripcion) }}</textarea>

                @error('descripcion')
                <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn boton mb-3 mt-3">Actualizar los datos</button>
        </form>


    </div>
</x-layout>