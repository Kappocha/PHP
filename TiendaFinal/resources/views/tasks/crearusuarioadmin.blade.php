@extends('layout/template')
@section('title', 'Crear Usuario')
@section('contenido')
<main>
    <h2>Crear Usuario</h2>
    <form method="post" action="{{ route('tasks.guardarusr') }}">
        @csrf

        <div class="form-group">
            <label for="Nick">Nick:</label>
            <input type="text" name="nick" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Apellidos">Apellidos:</label>
            <input type="text" name="apellidos" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ID">DNI:</label>
            <input type="text" name="id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fnac" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Contrasena">Contraseña:</label>
            <input type="text" name="contrasena" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="rol">Rol:</label>
            <select name="rol" class="form-control" required>
                <option value="Admin">Admin</option>
                <option value="Usuario">Usuario</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
</main>
<a href="{{ route('tasks.usuariosadmin') }}" class="btn btn-secondary">Volver</a>
@endsection
