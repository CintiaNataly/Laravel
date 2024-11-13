<x-layout>
    <x-slot:title>Usuarios Administrador</x-slot:title>

    <div class="container">
        <a href="{{ route('admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h1 class="visually-hidden mb-3">Usuarios Administrador</h1>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="center text-start mb-2">Usuarios Administrador</h2>
            <a href="{{ route('usuarios.crear') }}" class="btn boton mb-3 mt-3 ms-3">Agregar un Usuarios Administrador</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
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
                    <td>{{ $usuario->rol }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('usuarios.editar', ['id' => $usuario->id]) }}" class="btn btn-secondary">Editar</a>
                            <a href="{{ route('usuarios.eliminar', ['id' => $usuario->id]) }}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>