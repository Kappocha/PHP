<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ url('/tasks') }}">
            @csrf
            nop mal
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" id="usuario" name="usuario">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html