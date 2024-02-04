@extends('layout/template')
@section('title', 'Login')
@section('contenido')
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('tasks.login') }}"> <!-- Aqui llamo a la ruta -->
            @csrf
            <div class="form-group">
                <label for="usuario">Usuario (DNI)</label>
                <input type="text" id="usuario" name="usuario"><br>
                <label for="contrasena"> Contraseña </label>
                <input type="text" id="contrasena" name="contrasena">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="{{ route('tasks.register') }}"> <button class="btn btn-secondary"> Registrarse </button></a>
    </div>
</body>
</html>