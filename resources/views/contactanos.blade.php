<x-layout>
    <x-slot:title>Contáctanos</x-slot:title>

    <div class="servicios-section">
        <h1 class="titulo-servicios mb-3"><span>Contactanos</span></h1>
        <div class="linea-amarilla"></div>
    </div>

    <div class="container mt-5">
        <p class="text-center fs-3 texto">Si tenes alguna pregunta o necesitas más información sobre nuestros servicios, <br> no dudes en escribirnos. Estaremos encantados de atenderte.</p>

        @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif

        <div class="card shadow p-4 mb-5 bg-white rounded">
            <form action="{{ route('contactanos') }}" method="POST" class="mt-4">
                @csrf
                <div class="row">
                    <div class="col mb-4">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" @error('nombre') aria-errormessage="error-nombre" @enderror>

                        @error('nombre')
                        <div class="text-danger bi bi-x" id="error-nombre">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" @error('email') aria-errormessage="error-email" @enderror>

                        @error('email')
                        <div class="text-danger bi bi-x" id="error-email">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" name="phone" @error('telefono') aria-errormessage="error-telefono" @enderror>

                        @error('telefono')
                        <div class="text-danger bi bi-x" id="error-telefono">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary w-25">Enviar</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>