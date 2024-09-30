<?php

/** @var \Illuminate\Support\ViewErrorBag $errors */

// dd($errors);

?>

<x-layout>

    <x-slot:title>Crear Novedad</x-slot:title>
    <h1 class="mb-3">Crear una Novedad</h1>

    @if($errors->any())
    <div class="alert alert-danger mt-3">Hay errores en los datos ingresados</div>
    @endif

    <div class="container">
        <h2 class="center">Crear una Novedad</h2>

        <form action="{{ url('admin/novedades/publicar')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control">
            </div>

            <div class="mb-3 row">
                <div class="col">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" id="categoria" name="categoria" class="form-control">
                </div>
                <div class="col">
                    <label for="fecha_publicacion" class="form-label">Creación</label>
                    <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label for="info_abreviada" class="form-label">Información breve</label>
                <input type="text" id="info_abreviada" name="info_abreviada" class="form-control">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control">
            </div>

            <button type="submit" class="btn boton mb-3 mt-3">Agregar</button>
        </form>


    </div>
</x-layout>