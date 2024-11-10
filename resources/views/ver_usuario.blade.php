<x-layout>
    <x-slot:title>Detalles del Usuario</x-slot:title>

    <div class="container mt-5">
        <a href="{{ route('admin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h1 class="visually-hidden ">Detalles del Usuario</h1>
        <h2 class="center text-start mb-2">Detalles del Usuario</h2>

        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title">{{ $usuario->name }}</h2>
                <p class="card-text"><strong>Email:</strong> {{ $usuario->email }}</p>
                <p class="card-text"><strong>Rol:</strong> {{ $usuario->rol }}</p>
                <p class="card-text"><strong>Servicio:</strong> {{ $usuario->servicio ? $usuario->servicio->nombre : 'No tiene servicios contratados' }}</p>
            </div>
        </div>

    </div>

</x-layout>