<x-layout>
    <x-slot:title>Confirmación Exitosa!!</x-slot:title>

    <div class="container mt-5">
        <a href="{{ route('inicio') }}" class="btn btn-outline-dark mt-3"> ← volver </a>

        <h1 class="visually-hidden ">Confirmación Exitosa!!</h1>
        <h2 class="center text-start mb-2">Confirmación Exitosa!!</h2>

        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title">{{ $usuario->name }}</h2>
                <p class="card-text"><strong>Email:</strong> {{ $usuario->email }}</p>
                <p class="card-text"><strong>Mis servicios:</strong></p>
                <lu>
                    <li>{{ $usuario->servicio ? $usuario->servicio->nombre : 'No tiene servicios contratados' }}</li>
                </lu>
            </div>
        </div>

    </div>

</x-layout>