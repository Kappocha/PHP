@extends('layout/template')
@section('title', 'Crear Categoría')
@section('contenido')
<main>
    <h2>Crear Categoría</h2>
    <form method="post" action="{{ route('tasks.guardarcat') }}">
        @csrf

        <div class="form-group">
            <label for="nombre">ID:</label>
            <input type="number" name="id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crear Categoría</button>
    </form>
</main>
<a href="{{ route('tasks.categoriasadmin') }}" class="btn btn-secondary">Volver</a>
@endsection