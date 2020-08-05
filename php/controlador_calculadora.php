<?php
require_once 'modelo_calculadora.php';
$calcular = new calculadora();

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$opcion=$_POST["opcion"];

echo $calcular->calcularDatos($num1,$num2,$opcion);

require_once 'vista_calculadora.php';

?>