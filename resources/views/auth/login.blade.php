<x-layout>
    <x-slot:title>Inicio de sesión</x-slot:title>

    <div class="container d-flex justify-content-center p-3">
        <div class="card shadow" style="max-width: 1000px; width: 100%;">
            <div class="card-body">
                <h1 class="mb-4 text-center">Iniciar Sesión</h1>

                <form action="{{ route('auth.doLogin') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" @error('email') aria-errormessage="error-email" @enderror>
                        @error('email')
                        <div class="text-danger bi bi-x" id="error-info-breve">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password" @error('password') aria-errormessage="error-password" @enderror>
                        @error('password')
                        <div class="text-danger bi bi-x" id="error-info-breve">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
                <a href="{{ route('usuarios.registrar') }}" class="btn boton w-25 fs-6 mt-5 mx-auto d-block"> Registrarme </a>
            </div>
        </div>
    </div>

</x-layout>