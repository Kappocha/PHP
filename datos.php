<?php

//session_start();


$id = $_GET['id'];
$color = $_GET['Color'];
$dimensiones = $_GET['Dimensiones'];
$tipo = $_GET['Tipo'];

//$_SESSION["nick_logueado"]=$nombre;

echo "El color es ".$color." las dimensiones son ".$dimensiones." y el tipo es ".$tipo. " con id " .$id;

$servidor="localhost";
$usuario="root";
$password="";
$bd="armario";

$con=mysqli_connect($servidor,$usuario,$password,$bd);

if(!$con){
    die("No se ha podido realizar la conexión_".mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($con,"utf8");
    echo "Se ha establecido correctamente la conexión a la base de datos";

    $sql="INSERT INTO `armarios`(`id`, `color`, `dimensiones`, `tipo`) 
    VALUES ('$id','$color','$dimensiones','$tipo')";
    
    $consulta=mysqli_query($con,$sql);

    if(!$consulta){
        die("No se ha podido realizar el insert");
    }else{
        echo "El insert se ha realizado correctamente";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
    <?php
        $sql2="SELECT * FROM `armarios`";
        $consulta=mysqli_query($con,$sql2);
        while($fila=$consulta->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$fila["id"]."</td>";
            echo "<td>".$fila["color"]."</td>";
            echo "<td>".$fila["dimensiones"]."</td>";
            echo "<td>".$fila["tipo"]."</td>";
            echo "</tr>";
        }
    ?>
    </table>

    <form action="/logout.php" method="post">

    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
}
?>