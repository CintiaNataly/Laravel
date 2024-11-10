<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AeroAsist - <?= $title; ?></title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/aero-asist-icon.png') }}" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="app">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="left">
                    <a class="navbar-brand" href="<?= route('inicio') ?>"><img src="{{ asset('img/aero-asist-02.png') }}" alt="logo de AeroAsist" class="logo-nav"></a>
                </div>
                <div class="right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= route('inicio') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('quienes-somos') ?>">Quienes somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('servicios') ?>">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('novedades') ?>">Novedades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('contactanos') ?>">Contactanos</a>
                            </li>

                            <li class="nav-item">
                                @auth
                                @if(auth()->user()->rol == 'administrador')
                                <a class="btn btn-primary" href="<?= url('admin') ?>">Admin</a>
                                @else
                                <a class="btn btn-primary" href="{{ route('ver.perfil', ['id' => auth()->user()->id]) }}">Ver perfil</a>
                                @endif
                                @endauth
                            </li>

                            @auth
                            <li class="nav-item">
                                <form action="{{ route('auth.logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger ms-2">{{ auth()->user()->name }} (Cerrar Sesión)</button>
                                </form>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="btn btn-dark ms-2" href="<?= route('auth.showLogin'); ?>">Iniciar Sesión</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <main>
            <div class="container">
                @if(session()->has('feedback.message-sucess'))
                <p class="alert alert-success mt-3"> <i class="bi bi-check-circle"></i> {{ session()->get('feedback.message-sucess') }}</p>

                @endif
                @if(session()->has('feedback.message-error'))
                <p class="alert alert-danger mt-3"><i class="bi bi-x-circle"></i> {{ session()->get('feedback.message-error') }}</p>
                @endif

                @if(session()->has('feedback.message-warning'))
                <p class="alert alert-warning mt-3"><i class="bi bi-exclamation-circle"></i> {{ session()->get('feedback.message-warning') }}</p>
                @endif
            </div>

            <?= $slot; ?>
        </main>


        <footer class="footer">
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/aero-asist-03.png') }}" alt="logo de AeroAsist" class="logo-nav">
                        <p class="text-start">Bustos Cintia</p>
                        <p class="text-start">Paoliello Fernanda</p>
                    </div>
                    <div class="col mt-2">
                        <a class="nav-link ahover" href="<?= route('inicio') ?>">Home</a>
                        <a class="nav-link ahover" href="<?= route('quienes-somos') ?>">Quienes somos</a>
                        <a class="nav-link ahover" href="<?= route('servicios') ?>">Servicios</a>
                        <a class="nav-link ahover" href="<?= route('novedades') ?>">Novedades</a>
                        <a class="nav-link ahover" href="<?= route('contactanos') ?>">Contactanos</a>
                    </div>
                    <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11709.37285550425!2d-58.43014776618629!3d-34.5578179786092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5a7f531c7b5%3A0xfdd992892f9ccadb!2sAeroparque%20Internacional%20Jorge%20Newbery!5e0!3m2!1ses!2sar!4v1730944419807!5m2!1ses!2sar" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <p class="mt-5">Copyright &copy; Portales y comercio electrónico - 2024</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.querySelectorAll('.confirm-link').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevenir la acción por defecto del enlace

                // Obtener la ruta, reserva_id y el título desde los atributos data del botón clickeado
                const route = this.getAttribute('data-route');
                const reservaId = this.getAttribute('data-reserva-id');
                const reservaTitulo = this.getAttribute('data-reserva-titulo');

                Swal.fire({
                    title: `¿Quieres confirmar la reserva?`,
                    text: `Se procederá a generar la reserva para "${reservaTitulo}".`,
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, generar reserva',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `${route}/${reservaId}`;
                    }
                });
            });
        });
    </script>

</body>

</html>