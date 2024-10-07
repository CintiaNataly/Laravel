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
                <div class="card">
                    <img src="{{ $servicio->imagen }}" class="card-img-top" alt="Imagen de la sala VIP">
                    <div class="card-body">
                        <h3 class="card-title">{{ $servicio->nombre }}</h3>
                        <p class="card-text">{{ $servicio->descripcion }}</p>
                        <p>Tarifa acceso: <strong>USD {{ $servicio->tarifa_acceso }}</strong></p>
                        <p>Tarifa socios: <strong>USD {{ $servicio->tarifa_socios }}</strong></p>
                        <p><strong>Condiciones:</strong> {{ $servicio->condiciones }}</p>
                        
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Reservar
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Disculpe las molestias</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <p>En este momento no se encuentra disponible esta sala. Intente más tarde.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>