<?php 
class Circulo{
    private $radio; 
    private const PI = M_PI;

    function setRadio($radio){
    $this->radio = $radio;
    }

    function getRadio(){
        return $this->radio;
    }

    function getArea(){
        $area=(self::PI*($this->radio * $this->radio));
        return $area;
    }

}