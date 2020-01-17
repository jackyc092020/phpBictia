<?php
require('conexion.php');

//variable que almacena lo que el usuario envia desde url http
$videojuegonuevo = $_GET['nuevonombre'];
$videojuegoant = $_GET['id'];


//variable para consultar las tablas mysql
$sql= "UPDATE SET nombre='$videojuegonuevo' WHERE id='$videojuegoant'";

//enviar datos: conexion + sentencia
mysqli_query($conexion, $sql);

//direccionamiento de rutas
header('Location: mostrar.php');

?>
