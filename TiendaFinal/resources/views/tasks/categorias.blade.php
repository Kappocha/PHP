@extends('layout/template')
@section('title', 'Catalogo Productos')
@section('contenido')
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
        </tr>
        @endforeach
    </tbody>
    
</main>
<a href="{{ route('tasks.usuario') }}" class="btn btn-primary"> Volver </a>