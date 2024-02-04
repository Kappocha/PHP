@extends('layout/template')
@section('title', 'Catalogo Productos')
@section('contenido')
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
                <th> Categoria </th>
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
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Asegúrate de que jQuery se carga antes de DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "order": [[4, "asc"]], 
            });
        });
    </script>   

</main>
<a href="{{ route('tasks.usuario') }}" class="btn btn-primary"> Volver </a>
