<?php
    class CocheConRemolque extends Coche{
        private $capacidadRemolque;


        public function setCapacidadRemolque(int $capacidad){
            $this->capacidadRemolque = $capacidad;
        }

        public function getCapacidadRemolque():int{
            return $this->capacidadRemolque;
        }

        public function __construct($matricula="",$marca="",$carga="",$capacidad=0){
            parent::__construct($matricula,$marca,$carga);
            $this->capacidadRemolque = $capacidad;
        }
        public function imprimir(){
            return "<br> ".parent::imprimir()."  La capacidad del remolque es: $this->capacidadRemolque kilos.";
        }
    }
 
    
?>