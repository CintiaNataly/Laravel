<x-layout>
    <x-slot:title>Panel de administración</x-slot:title>

    <style>
        body {
            background-image: url('img/back-admin.jpg');
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: contain;
            max-width: 100%;
        }
    </style>

    <div class="container">
        <h1 class="visually-hidden">Panel de administración</h1>
        <h2 class="center mb-5">Panel de administración</h2>

        <div class="row">
            <div class="col">
                <a href="{{ route('novedades.admin') }}" class="btn boton mb-3 mt-3 fs-5">Administrar Novedades</a>
            </div>
            <div class="col">
                <a href="{{ route('servicios.admin') }}" class="btn boton mb-3 mt-3 fs-5">Administrar Servicios</a>
            </div>
            <div class="col">
                <a href="{{ route('usuarios.admin') }}" class="btn boton mb-3 mt-3 fs-5">Usuarios Administrador</a>
            </div>
        </div>

        <h2 class="center mb-5">Lista de usuarios</h2>
        <table class="table table-striped mb-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Servicios contratados</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->servicio_fk ? $usuario->servicio->nombre : 'No tiene servicios contratados' }}</td>
                    <td>{{ $usuario->rol }}</td>
                    <td><a href="{{ route('usuarios.ver', $usuario->id) }}" class="btn btn-secondary">Ver usuario</a></td>
                </tr>
                @endforeach
        </table>
    </div>

</x-layout>