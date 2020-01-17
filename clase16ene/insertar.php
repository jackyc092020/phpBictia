<?php
//a. conexion.php b. insertar.php c.mostrar.php desde

//hosting, usuario, contraseña, nombre BD
require('conexion.php');

//variable que almacena lo que el usuario envia desde url http
$videojuego = $_GET['videojuego'];

//variable para consultar las tablas mysql
$sql= "INSERT INTO videojuegos (nombre) VALUES ('$videojuego')";

//enviar datos: conexion + sentencia
mysqli_query($conexion, $sql);

//direccionamiento de rutas
header('Location: mostrar.php');


?>
