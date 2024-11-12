<x-layout>

    <x-slot:title>Servicios</x-slot:title>

    <div class="servicios-section">
        <h1 class="titulo-servicios mb-3"><span>Servicios</span></h1>
        <div class="linea-amarilla"></div>
    </div>


    <div class="container my-4">
        <div class="row">

            @foreach($servicios as $servicio)
            <div class="col-md-4 mb-4">
                <div class="card tarjeta">
                    @if($servicio->portada && Storage::exists($servicio->portada))
                    <img src="{{ Storage::url($servicio->portada) }}" alt="{{ $servicio->descripcion_portada }}" class="img-fluid m-auto">
                    @else
                    <img src="{{ asset('storage/imagenes/' . 'no-imagen.jpg') }}" alt="No hay imagen" class="img-fluid m-auto">
                    @endif
                    <div class="card-body tarjeta-body">
                        <h3 class="card-title">{{ $servicio->nombre }}</h3>
                        <p class="card-text">{{ $servicio->descripcion }}</p>
                        <p>Tarifa acceso: <strong>USD {{ $servicio->tarifa_acceso }}</strong></p>
                        <p>Tarifa socios: <strong>USD {{ $servicio->tarifa_socios }}</strong></p>
                        <p><strong>Condiciones:</strong> {{ $servicio->condiciones }}</p>
                        <a href="#" class="confirm-link btn boton" data-route="<?= url('confirmar-reserva') ?>" data-reserva-id="{{ $servicio->servicios_id }}" data-reserva-titulo="{{ $servicio->nombre }}">Reservar sala</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>