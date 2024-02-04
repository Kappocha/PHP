@extends('layout/template')
@section('title', 'Gestion Usuarios')
@section('contenido')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<main>
    <h2> Gestion de Usuarios </h2>
    <table class="table table-hover">
    <thead>
        <tr>
            <th> ID </th>
            <th> Nick </th>
            <th> Nombre </th>
            <th> Apellidos </th>
            <th> Email </th>
            <th> Fecha_Nacimiento </th>
            <th> Contraseña </th>
            <th> Rol </th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuario as $usr)
        <tr>
            <td> {{ $usr->ID }} </td>
            <td> {{ $usr->Nick }} </td>
            <td> {{ $usr->Nombre }} </td>
            <td> {{ $usr->Apellidos }} </td>
            <td> {{ $usr->Email }} </td>
            <td> {{ $usr->Fecha_nacimiento }} </td>
            <td> {{ $usr->Contrasena }} </td>
            <td> {{ $usr->Rol }} </td>
            <td>
                <form method="post" action="{{ route('tasks.editarusr', ['id' => $usr->ID]) }}" style="display:inline;">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form method="post" action="{{ route('tasks.borrarusr', ['id' => $usr->ID]) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
        <a href="{{ route('tasks.admin') }}" class="btn btn-secondary"> Volver </a>
        <a href="{{ route('tasks.crearusr') }}" class="btn btn-primary"> Crear Usuario </a>
    </tbody>
    
</main>

