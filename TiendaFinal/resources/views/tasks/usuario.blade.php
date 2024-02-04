@php
    $usuario = session('usuario');
@endphp
@extends('layout/template')
@section('title', 'Panel Usuario')
@section('contenido')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
Hola Usuario {{ $usuario->Nick }}<br>

<a href={{ route('tasks.moduser')}}> <button class="btn btn-primary"> Perfil de Usuario </button> </a> <br> <br>
<a href={{ route('tasks.catprod')}}> <button class="btn btn-primary"> Catalogo de Productos </button></a> <br> <br>
<a href={{ route('tasks.categorias')}}> <button class="btn btn-primary"> Categorias </button> </a> <br> <br>
<button class="btn btn-primary"> Carrito </button> <br> <br>

<a href={{ route('tasks.auth')}}> <button class="btn btn-danger"> Deslogearse </button></a>