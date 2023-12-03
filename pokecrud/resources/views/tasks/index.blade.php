@extends('layout/template')

@section('title', 'Pokemon')
    
@section('contenido')

<main>
    <div class="container py-4">
        <h2> Listado de Pokemons </h2>

        <a href="{{ url('tasks/create') }}" class="btn btn-primary"> Nuevo Pokemon </a>

        <table class="table table-hover">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Tamaño</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemon as $poke)
            <tr>
                <td> {{ $poke->id }} </td>
                <td> {{ $poke->Nombre }} </td>
                <td> {{ $poke->Tipo }} </td>
                <td> {{ $poke->Tamaño }} </td>
                <td> {{ $poke->Peso }} </td>
                <td> <a href="{{ url('tasks/'.$poke->id.'/edit') }}" class="btn btn-warning btn-sm"> Editar </td>
                <td> <form action="{{ url('tasks/'.$poke->id) }}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                </td>
            </tr>
            @endforeach
        </tbody>
</main>