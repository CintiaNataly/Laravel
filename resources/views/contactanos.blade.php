<x-layout>

    <x-slot:title>Contactanos</x-slot:title>

        <div class="container text-center mt-5">
                <img src="img/aero-asist-contactanos.png" alt="Contactanos AeroAsist" class="img-fluid w-75">
        </div>

            <div class="container mt-5">
                <p class="text-center fs-3 text">Si tienes alguna pregunta o necesitas más información sobre nuestros servicios, no dudes en escribirnos. Estaremos encantados de atenderte.</p>

        
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card shadow p-4 mb-5 bg-white rounded">
                    <form action="{{ route('contactanos') }}" method="POST" class="mt-4" >
                    @csrf 
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                    </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                </div>
                </form>
            </div>
            </div>
        </div>


</x-layout>


