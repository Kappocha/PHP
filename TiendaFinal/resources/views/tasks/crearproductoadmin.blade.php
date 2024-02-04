@extends('layout/template')
@section('title', 'Crear Producto')
@section('contenido')
<main>
    <h2>Crear Producto</h2>
    <form method="post" action="{{ route('tasks.guardarprod') }}">
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

        <div class="form-group">
            <label for="unidades">Unidades:</label>
            <input type="number" name="unidades" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="preciou">Precio Unitario:</label>
            <input type="double" name="preciou" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select name="categoria" class="form-control">
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}"> {{$categoria->Nombre}} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
</main>
<a href="{{ route('tasks.catprodadmin') }}" class="btn btn-secondary">Volver</a>
@endsection