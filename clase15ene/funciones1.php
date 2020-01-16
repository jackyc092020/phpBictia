<?php

function alcien(int $ind){

    while($ind<101){
        echo "# $ind";
        $ind++;
    }

}
function aldoscientos(int $ind1){
    while($ind1<201){
        echo "# $ind1";
        $ind1++;
    }

}

echo alcien(1) . "<hr>";
echo "y <br>";
echo aldoscientos(101);
echo "<hr>";


function multiplicar(){
    for($num1=1; $num1<11; $num1++)
        for($num2=1; $num2<11; $num2++){

            $res=$num1 * $num2;
            echo " $num1 x $num2 = $res <br>";
        }
           
    
}

echo multiplicar();
echo "<hr>";

function aquinientos(int $tabla){
    $i=1;
    $res=0;

    while($res < 500){
        $res= $tabla * $i;
        $i++;
        if($res < 500)
        echo $res . "<br>" ;
        else
        echo "terminó";
    }

}

echo "la tabla del 8 contiene:" . aquinientos(8);

?>