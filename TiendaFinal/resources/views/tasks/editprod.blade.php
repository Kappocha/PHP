@extends('layout/template')
@section('title', 'Editar Producto')
@section('contenido')
<main>
    <h2>Editar Producto</h2>
    <form method="post" action="{{ route('tasks.actualizarprod', ['id' => $producto->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $producto->Nombre }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required>{{ $producto->Descripción }}</textarea>
        </div>

        <div class="form-group">
            <label for="unidades">Unidades:</label>
            <input type="number" name="unidades" value="{{ $producto->Unidades }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio Unitario:</label>
            <input type="double" name="precio" value="{{ $producto->PrecioU }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select name="categoria" class="form-control">
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}"> {{$categoria->Nombre}} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    </form>
</main>
<a href="{{ route('tasks.catprodadmin') }}" class="btn btn-secondary">Volver</a>
@endsection
