<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="login-container">
        Solo hay 2 usuarios <br>
        usuario - Solo puede ver <br>
        administrador - Permiso total de poder modificar <br>
        <h2>Login</h2>
        <form method="POST" action="{{ route('tasks.login') }}"> <!-- Aqui llamo a la ruta -->
            @csrf
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" id="usuario" name="usuario">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>