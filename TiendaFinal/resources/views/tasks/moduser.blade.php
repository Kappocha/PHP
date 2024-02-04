@extends('layout/template')
@section('title', 'Editar Usuario')
@section('contenido')

@php
 $usuario = session('usuario');   
@endphp

<main>
    <h2>Editar Usuario</h2>
    <form method="post" action="{{ route('tasks.editu', ['id' => $usuario->ID]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nick">Nick:</label>
            <input type="text" name="nick" value="{{ $usuario->Nick }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $usuario->Email }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $usuario->Nombre }}" class="form-control" required disabled>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" value="{{ $usuario->Apellidos }}" class="form-control" required disabled>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" value="{{ $usuario->Fecha_nacimiento }}" class="form-control" required disabled>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" value="{{ $usuario->contrasena }}" class="form-control" required disabled >
        </div>

        <div class="form-group">
            <label for="rol">Rol:</label>
            <select name="rol" class="form-control" required disabled>
                <option value="Admin" {{ $usuario->Rol === 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Usuario" {{ $usuario->Rol === 'Usuario' ? 'selected' : '' }}>Usuario</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
    </form>
</main>
<a href="{{ route('tasks.usuario') }}" class="btn btn-secondary">Volver</a>
@endsection