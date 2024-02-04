@extends('layout/template')
@section('title', 'Editar Categoría')
@section('contenido')
<main>
    <h2>Editar Categoría</h2>
    <form method="post" action="{{ route('tasks.actualizarcat', ['id' => $categoria->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $categoria->Nombre }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required>{{ $categoria->Descripción }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
    </form>
</main>
<a href="{{ route('tasks.categoriasadmin') }}" class="btn btn-secondary">Volver</a>
@endsection