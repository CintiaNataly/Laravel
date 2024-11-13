<x-layout>
    <x-slot:title>Administrar Servicios</x-slot:title>

    <div class="container">
        <a href="{{ route('admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h1 class="visually-hidden mb-3">Administrar Servicios</h1>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="center text-start mb-2">Administrar Servicios</h2>
            <a href="{{ route('servicios.crear') }}" class="btn boton mb-3 mt-3 ms-3">Agregar un Servicios</a>
        </div>

        <p>*Los precios estan en dolares</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>descripción</th>
                    <th>condiciones</th>
                    <th>Tarifa acceso</th>
                    <th>Tarifa socio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->servicios_id }}</td>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>{{ $servicio->condiciones }}</td>
                    <td>{{ $servicio->tarifa_acceso }}</td>
                    <td>{{ $servicio->tarifa_socios }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('servicios.editar', ['id' => $servicio->servicios_id]) }}" class="btn btn-secondary">Editar</a>
                            <a href="{{ route('servicios.eliminar', ['id' => $servicio->servicios_id]) }}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>