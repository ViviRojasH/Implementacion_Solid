<?php
include "Calculadora.php";


$objCalculadora = new Calculadora();
$objCalculadora->Calcular($_GET["num1"], $_GET["num2"], $_GET["funcion"]);


?>  