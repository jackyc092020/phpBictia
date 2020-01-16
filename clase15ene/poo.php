<?php
// persona con nombre apellido y edad.  Que es, que tiene, que hace
/*
class Xxx{
    public $cvr1;
    public $cvr2;
    public $cvr3;


    public function __construct($pvr1, $pvr2, $pvr3,){
    $this->cvr1 =$pvr1;
    $this->cvr2 =$pvr2;
    $this->cvr3 =$pvr3;
    }

    public function fxx(){
        echo "$this->cvr1 y  $this->cvr3";
    }

}  fin de toda la clase , sigue hacer instancias

$xxx = new Xxx('vr1','vr2','vr3');
$xxx->fxx();
*/

class Ordenesdesayuno{
    public $cereal;
    public $liquido;
    public $masa;
    public $relleno;
    public $fruta;

public function __construct($cbebida1, $cbebida2, $cpastel1, $cfruta){

    $this->cereal = $cbebida1;
    $this->liquido = $cbebida2;
    $this->masa = $cpastel1;
    $this->relleno = "queso";
    $this->fruta = $cfruta;
}


public function hervir(){
    echo "<hr>";
    echo "ya está  $this->cereal con $this->liquido <br>";
    }
public function preparar(){
    echo "preparado y servida la torta de $this->masa con $this->relleno <br>";
    }
public function alistar(){
    echo "ya está en trozos $this->fruta <br>";
    }
}
    $orden1 = new Ordenesdesayuno('avena','leche','maiz','papaya');
    $orden1->hervir();
    $orden1->preparar();
    $orden1->alistar();

    $orden2 = new Ordenesdesayuno('cafe','agua','trigo','fresa');
    $orden2->hervir();
    $orden2->preparar();
    $orden2->alistar();



?>