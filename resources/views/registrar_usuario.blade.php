<x-layout>
    <x-slot:title>Registrarme</x-slot:title>

    <div class="container">
        <a href="{{ route('auth.showLogin') }}" class="btn btn-outline-dark mt-3"> ← volver </a>
    </div>

    <div class="container d-flex justify-content-center p-3">
        <div class="card shadow" style="max-width: 1000px; width: 100%;">
            <div class="card-body">
                <h1 class="mb-4 text-center">Registrarme</h1>

                <form action="{{ route('usuario.registrado') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" @error('name') aria-errormessage="error-name" @enderror>

                            @error('name')
                            <div class="text-danger bi bi-x" id="error-name">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" @error('email') aria-errormessage="error-info" @enderror>

                            @error('email')
                            <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" @error('password') aria-errormessage="error-info" @enderror>{{ old('password') }}</input>

                            @error('password')
                            <div class="text-danger bi bi-x" id="error-info">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn boton mb-3 mt-3">Registrarme</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>