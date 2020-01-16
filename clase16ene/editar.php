<?php
require('conexion.php');

//variable que almacena lo que el usuario envia desde url http
$videojuegonuevo = $_GET['cambiar'];
$videojuegoant = $_GET['id'];


//variable para consultar las tablas mysql
$sql= "UPDATE SET nombre='cambiar' WHERE id='videojuegoant'";

//enviar datos: conexion + sentencia
mysqli_query($conexion, $sql);

//direccionamiento de rutas
header('Location: mostrar.php');

?>
