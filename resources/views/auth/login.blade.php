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
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button> 
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
