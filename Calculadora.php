<?php
include "Sumar.php";
include "Restar.php";
include "Multiplicar.php";
include "Dividir.php";


class Calculadora {
  

    public function Calcular($num1, $num2, $funcion){
        $funciones=[
            new Sumar,
            new Restar,
            new Multiplicar,
            new Dividir
        ];
        foreach ($funciones as  $value) {
            if (get_class($value) == $funcion) {
                $value->ObtenerResultado($num1, $num2);
            }
        }
    }
    
}
?>