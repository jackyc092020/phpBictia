<?php
function edadPersona($edadMinima = 18){
    if($edadMinima >= 18)
    echo "la edad es $edadMinima <br>";
    else
    echo "lo siento <br>";

}edadPersona(35);
edadPersona();
edadPersona(70);
edadPersona(10);
echo "<hr>";

function sumar(int $x, int $y){
    $z=$x+$y;
    return $z;
}
echo "sumar 5 + 10 :" . sumar(5, 10) . "<br>";
echo "<hr>";




?>

