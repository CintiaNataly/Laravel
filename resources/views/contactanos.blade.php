<x-layout>
    <x-slot:title>Contactanos</x-slot:title>

    <h1 class="text-center mb-4">¡Ponte en contacto con nosotros!</h1>
    <div class="container-fluid">
    <a class="navbar-brand" href="<?= url('inicio') ?>">
            <img src="img/aero-asist-01.png" alt="logo de AeroAsist" class="contacto-logo img-fluid" style="max-width: 400px;">
        </a>

        <p class="text-center">Si tienes alguna pregunta o necesitas más información sobre nuestros servicios, no dudes en escribirnos. Estaremos encantados de atenderte.</p>

        <!-- Mostrar el mensaje de éxito si está presente -->
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contactanos') }}" method="POST" class="mt-4 mx-auto p-4 border rounded shadow-sm" style="max-width: 600px;">
            @csrf <!-- Necesario para proteger el formulario en Laravel -->

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
    </div>
</x-layout>



