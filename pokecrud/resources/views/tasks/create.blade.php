<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body>
        <?php
        ?>
        <form method="POST" action="{{ url('tasks') }}">
            @csrf

            <label> ID Pokemon </label>
            <input type="number" name="id" required> <br> <br>
            <label> Nombre </label>
            <input type="text" name="Nombre" required> <br><br>
            <label> Tipo </label>
            <select name="Tipo" required>
                <option value="Normal">Normal</option>
                <option value="Fuego">Fuego</option>
                <option value="Agua">Agua</option>
                <option value="Planta">Planta</option>
                <option value="Bicho">Bicho</option>
                <option value="Volador">Volador</option>
                <option value="Tierra">Tierra</option>
                <option value="Roca">Roca</option>
                <option value="Siniestro">Siniestro</option>
                <option value="Fantasma">Fantasma</option>
                <option value="Hada">Hada</option>
                <option value="Lucha">Lucha</option>
                <option value="Acero">Acero</option>
                <option value="Hielo">Hielo</option>
                <option value="Electrico">Electrico</option>
                <option value="Psiquico">Psiquico</option>
                <option value="Veneno">Veneno</option>
                <option value="Dragon">Dragon</option>
            </select> <br><br>
            <label> Tamaño </label>
            <select name="Tamaño">
                <option value="Pequeño"> Pequeño </option>
                <option value="Mediano"> Mediano </option>
                <option value="Grande"> Grande </option>
            </select> <br><br>
            <label> Peso </label>
            <input type="double" name="Peso"> <br><br>
            <a href="{{ url('tasks') }}" class="btn btn-link"> Volver </a>
            <input type="submit" name="enviar_pokemon" value="Crear Pokemon"> <br><br>
        </form>
    </body>
</html>
