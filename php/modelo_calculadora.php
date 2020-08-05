<?php

class calculadora{
    public function calcularDatos($num1, $num2, $opcion){
        switch($opcion){
            case '0': return $num1 + $num2;break;
            case '1': return $num1 - $num2;break;
            case '2': return $num1 * $num2;break;
            case '3': return $num1 / $num2;break;
            case '4': return $num1 % $num2;break;
            default: break;

        }
    }
}

?>