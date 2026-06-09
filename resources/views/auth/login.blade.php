<!doctype html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar sesión</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="card shadow" style="width: 100%; max-width: 400px;">

        <div class="card-body">

            <h3 class="text-center mb-4">Iniciar sesión</h3>

            <form method="POST" action="/login">
                @csrf

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

                <!-- Remember -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Recordarme
                    </label>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary w-100">
                    Entrar
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="/forgot-password">Olvidé mi contraseña</a>
            </div>

            <div class="text-center mt-2">
                <a href="/register">Crear una cuenta</a>
            </div>

        </div>

    </div>

</div>

</body>
</html>