<x-layout>
    <x-slot:title>🛫</x-slot:title>
    <h1 class="visually-hidden mb-3">AeroAsist</h1>

    <div class="container">
        <div class="row">
            <div class="col-7">
                <img src="img/aero-asist-01.png" alt="logo de AeroAsist" class="logo mx-auto d-block">
                <h2 class="frase text-center">¡Tu aventura comienza aquí!</h2>
                <img src="img/ilustracion-home.png" alt="ilustración de una sala de aeropuerto">
            </div>
            <div class="col-5">
                <img src="img/mock-up.png" alt="mock-up de la app">
            </div>
        </div>
    </div>


    <div class="franja-texto">
        <div class="container mb-5">
            <p class="texto text-center">¡Descubrí la forma más fácil de moverte en el aeropuerto con nuestra nueva app!</p>
            <p class="fs-5">Con solo ingresar tu número de vuelo, podrás buscar rápidamente lugares dentro del aeropuerto, desde restaurantes hasta tiendas. Además, si necesitas asistencia, ¡Podes solicitarla al instante! No te pierdas de nada en tu próximo viaje. Descárgala ahora en Android y simplifica tu experiencia de viaje. ¡Tu aventura comienza acá! ✈️📱</p>
        </div>
    </div>


    <div class="container">
        <h2 class="frase mt-5 text-center">Todo lo que necesitás en un solo lugar</h2>
        <div class="row mt-5 mb-5">
            <div class="col-2"><img src="img/aeroa-asist-iconoshome-06.png" alt="Información de vuelo" class="mx-auto d-block"></div>
            <div class="col-2"><img src="img/aeroa-asist-iconoshome-07.png" alt="Asistencia al viajero" class="mx-auto d-block"></div>
            <div class="col-2"><img src="img/aeroa-asist-iconoshome-08.png" alt="Mapas interactivos" class="mx-auto d-block"></div>
            <div class="col-2"><img src="img/aeroa-asist-iconoshome-09.png" alt="Servicios" class="mx-auto d-block"></div>
            <div class="col-2"><img src="img/aeroa-asist-iconoshome-10.png" alt="Novedades" class="mx-auto d-block"></div>
            <div class="col-2"><img src="img/aeroa-asist-iconoshome-11.png" alt="AeroAsist" class="mx-auto d-block"></div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="row">
            <img src="img/viajar.jpg" alt="Mujer llevando valija en aeropuerto" class="mx-auto d-block col-4 p-0">
            <div class="col-8 backcarrusel p-0">
                <h2 class="frase mt-5 p-5 text-center">Volar debería ser una experiencia emocionante<br> y sin estrés</h2>
                <p class="p-3 fs-4 m-3"><span class="frase">AeroAsist</span> es una herramienta pensada para todas las personas que transitan por los aeropuertos ya que más del 8% de los pasajeros pierden su vuelo<br> al año.</p>
                <a class="nav-link" href="<?= route('servicios') ?>">
                    <button class="btn botoncarrousel mx-auto d-block">¡Conocé nuestros planes!</button>
                </a>
            </div>
        </div>
    </div>

</x-layout>