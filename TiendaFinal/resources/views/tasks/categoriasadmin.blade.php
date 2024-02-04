@extends('layout/template')
@section('title', 'Gestion Categorias')
@section('contenido')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<main>
    <h2> Listado de Categorias </h2>
    <table class="table table-hover">
    <thead>
        <tr>
            <th> ID </th>
            <th> Nombre </th>
            <th> Descripcion </th>
        </tr>
    </thead>
    <tbody>
        @foreach($categoria as $cat)
        <tr>
            <td> {{ $cat->id }} </td>
            <td> {{ $cat->Nombre }} </td>
            <td> {{ $cat->Descripción }} </td>
            <td>
                <form method="post" action="{{ route('tasks.editarcat', ['id' => $cat->id]) }}" style="display:inline;">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form method="post" action="{{ route('tasks.borrarcat', ['id' => $cat->id]) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</main>
<a href="{{ route('tasks.admin') }}" class="btn btn-secondary"> Volver </a>
<a href="{{ route('tasks.crearcat') }}" class="btn btn-primary"> Crear Categoria </a>
