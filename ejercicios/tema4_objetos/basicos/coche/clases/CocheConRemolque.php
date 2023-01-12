<?php
    class CocheConRemolque extends Coche{
        private $capacidadRemolque;

        //setters
        public function setCapacidadRemolque(int $capacidad){
            $this->capacidadRemolque = $capacidad;
        }

        //getters
        public function getCapacidadRemolque():int{
            return $this->capacidadRemolque;
        }

        //constructor coche con remolque
        public function __construct($matricula="",$marca="",$carga="",$capacidad=0){
            parent::__construct($matricula,$marca,$carga);
            $this->capacidadRemolque = $capacidad;
        }
        public function imprimir(){
            return "<br> ".parent::imprimir()."  La capacidad del remolque es: $this->capacidadRemolque kilos.";
        }
    }
 
    
?>