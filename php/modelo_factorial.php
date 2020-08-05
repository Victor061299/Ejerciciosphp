<?php

class factorial{
    private $num, $resultado, $imp;

public function Setvalor($num){
    $this->num=$num;
    $this->resultado=1;
    $this->imp=$num;
  
}
public function CalcularFactorial(){
    while($this->num>0){
        $this->resultado=$this->resultado*$this->num;
        $this->num--;
    }
}

  public function Getvalor(){
        echo '<h2> el factorial de: ' .$this->imp. ' es: ' .$this->resultado. ' </h2>';
        echo '<hr>';
        }

}
?>