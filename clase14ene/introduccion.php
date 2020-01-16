<?php
#gestores de contenido cms, siguiente node xpress angular.  orientado a procedimientos
#angular tipo estucturado compatile front y back
# asociativos y multidimensional
$colores= array("Azul","Aamarillo","Rojo");

foreach($colores as $valores){
    echo ("$valores <br>"); //parentesis
}
echo count($colores);//funcion
echo "<hr>"; // comillas

$autos= array("peugeot", "audi"," bmw");
$longautos=count($autos);
for($i=0;$i<$longautos;$i++){
    echo $autos[$i] . "<br>";//variable y punto etiqueta
}

echo "<hr>";

$persona= array("Meli"=>"5","Leo"=>"7","Sami"=>"9");
echo "Meli tiene" . $persona['Meli'] . "años";
echo "<hr>";

foreach($persona as $i => $valor){
    echo "Clave:" . $i . ", valor:" . $valor . "<br>"  ;
}

echo "<hr>";

$comidas= [
    [ 'nombre' => 'pastel',
      'precio' => 2000,
      'cantidad' => 4

    ],
    [ 'nombre' => 'rollito' ,
      'precio' => 3000 ,
      'cantidad' => 5

    ]
];
$total=0;
foreach($comidas as $comida){
    $total += $comida['precio']*$comida['cantidad'];
    echo $comida['nombre'] . "$" . $comida['precio'] . " x ". $comida['cantidad'] . "<br>";
}

echo "Total" . $total;

echo "<hr>";
/*
, , 2019
, , 2019, 
, , 2019, 
, , 2019, 
, , 2019, */

$pelis=[
    [ 'nombre' => 'Dolemite Is My Name',
    'director' => 'Eddie Murphy',
    'año' => '2019',
    'per_ppal' => 'Eddie Murphy'

    ],
    [ 'nombre' => 'The Irishman',
    'director' => 'Martin Scorsese',
    'año' => '2019',
    'per_ppal' => 'Robert De Niro'

    ],
    [ 'nombre' => 'Joker',
    'director' => 'Todd Phillips',
    'año' => '2019',
    'per_ppal' => 'Joaquin Phoenix'

    ],
    [ 'nombre' => 'Marriage Story',
    'director' => 'Noah Baumbach',
    'año' => '2019',
    'per_ppal' => 'Scarlett Johansson'

    ],
    [ 'nombre' => 'The Two Popes',
    'director' => 'Fernando Meirelles',
    'año' => '2019',
    'per_ppal' => 'Jonathan Pryce'

    ]
];
$totalpelis= count($pelis);
foreach($pelis as $peli){
    echo "<h2>Nombre: " . $peli['nombre']. "</h2> <br>";
    echo "<b>Director: " . $peli['director'] . "</b> <br>";
    echo "<u>Año: " . $peli['año'] . "</u> <br>" ;
    echo "<i> Personaje Principal: " . $peli['per_ppal'] . "</i> <br><br> ";

}
echo "Total" . $totalpelis;






?>

