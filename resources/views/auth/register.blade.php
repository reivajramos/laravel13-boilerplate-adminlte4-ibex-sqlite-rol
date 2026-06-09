<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="card shadow" style="width: 100%; max-width: 450px;">

        <div class="card-body">

            <h3 class="text-center mb-4">Crear cuenta</h3>

            <form method="POST" action="/register">
                @csrf

                <!-- Nombre -->
                <div class="mb-3">
                    <label class="form-label">Nombre completo</label>
                    <input type="text" name="name" class="form-control" placeholder="Juan Pérez" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" placeholder="correo@ejemplo.com" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label class="form-label">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••" required>
                </div>

                <!-- Terms -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" required id="terms">
                    <label class="form-check-label" for="terms">
                        Acepto los <a href="#">términos y condiciones</a>
                    </label>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary w-100">
                    Registrarse
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="/login">Ya tengo una cuenta</a>
            </div>

        </div>

    </div>

</div>

</body>
</html>