@php
    $usuario = session('usuario');
@endphp

@extends('layout/template')
@section('title', 'Panel Admin')
@section('contenido')

Hola Administrador {{ $usuario->Nick }}<br>
<a href={{ route('tasks.usuariosadmin')}}> <button class="btn btn-primary"> Gestion Usuarios </button> </a> <br> <br>
<a href={{ route('tasks.catprodadmin')}}> <button class="btn btn-primary"> Gestion Productos </button></a> <br> <br>
<a href={{ route('tasks.categoriasadmin')}}> <button class="btn btn-primary"> Gestion Categorias </button> </a> <br> <br>
<a href={{ route('tasks.auth')}}> <button class="btn btn-danger"> Deslogearse </button> </a>