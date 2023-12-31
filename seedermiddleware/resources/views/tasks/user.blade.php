@extends('layout/template')

@section('title', 'Pokemon')
    
@section('contenido')

<main>
    <div class="container py-4">
        <h2> Listado de Pokemons </h2>

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
            </tr>
            @endforeach
        </tbody>
</main>