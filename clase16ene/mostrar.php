<?php
require('conexion.php');

$sql = "SELECT * FROM videojuegos";

$resultado = mysqli_query($conexion, $sql);

$videojuegos = mysqli_fetch_all($resultado);
//luego el codigo php en el codigo
//<?php foreach($videojuegos as $videojuego): cerrar
//<?php endforeach; cerrar
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar videojuego :: LOL</title>
</head>
<body>
    <form action="insertar.php" method="get">
    <input type="text" name="videojuego" >
    <button type="submit">Añadir</button>
    </form>

<?php foreach($videojuegos as $videojuego):?>
<p>
    <?php echo$videojuego[1]; ?>
    <a href="eliminar.php?id=<?php echo $videojuego[0]; ?>">eliminar X</a>

    <input type="text" name="cambiar" >
    <a href="editar.php?id=<?php echo $videojuego[0]; ?>"> Editar </a>
</p>

<?php endforeach; ?>

</body>
</html>