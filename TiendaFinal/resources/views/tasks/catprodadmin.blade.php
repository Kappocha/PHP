@extends('layout/template')
@section('title', 'Gestion Productos')
@section('contenido')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<main>
    <h2> Listado de Productos </h2>
    <table class="table table-hover">
    <thead>
        <tr>
            <th> ID </th>
            <th> Nombre </th>
            <th> Descripcion </th>
            <th> Unidades </th>
            <th> Precio Unitario </th>
            <th> CategoriaID </th>
        </tr>
    </thead>
    <tbody>
        @foreach($catprod as $cprod)
        <tr>
            <td> {{ $cprod->id }} </td>
            <td> {{ $cprod->Nombre }} </td>
            <td> {{ $cprod->Descripción }} </td>
            <td> {{ $cprod->Unidades }} </td>
            <td> {{ $cprod->PrecioU }} </td>
            <td> {{ $cprod->CategoriaID }} </td>
            <td>
                <form method="post" action="{{ route('tasks.editarprod', ['id' => $cprod->id]) }}" style="display:inline;">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form method="post" action="{{ route('tasks.borrarprod', ['id' => $cprod->id]) }}" style="display:inline;">
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
<a href="{{ route('tasks.crearprod') }}" class="btn btn-primary"> Crear Producto </a>
