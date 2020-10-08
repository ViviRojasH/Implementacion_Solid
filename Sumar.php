<?php 
require_once("CalculadoraInterface.php");
class Sumar implements CalculadoraInterface{

    public function ObtenerResultado($num1, $num2){
        $Resultado = ($num1 + $num2);
        echo $Resultado;
    }
    
}

?>