<?php
extract($_GET);
require_once 'modelo_factorial.php';

$objFactorial = new factorial();

$objFactorial->Setvalor($num);
$objFactorial->CalcularFactorial();
$objFactorial->Getvalor();

require_once 'vista_factorial.php';

?>