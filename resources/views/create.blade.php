<x-layout>

    <x-slot:title>Crear Novedad</x-slot:title>
    <h1 class="mb-3">Crear una Novedad</h1>


    <div class="container">
        <h2 class="center">Crear una Novedad</h2>

        <form action="" method="">
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
                    <label for="fechaCreacion" class="form-label">Creación</label>
                    <input type="date" id="fechaCreacion" name="fechaCreacion" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label for="infoBreve" class="form-label">Información breve</label>
                <input type="text" id="infoBreve" name="infoBreve" class="form-control">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control">
            </div>

            <button type="submit" class="btn boton mb-3 mt-3">Agregar</button>
        </form>


    </div>
</x-layout>