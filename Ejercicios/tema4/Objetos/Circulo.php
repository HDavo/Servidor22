<?php 
    class Circulo {
        private $radio;
        private const VALORPI = M_PI; //esta puede ponerse debido a que las dos son constantes

        public function setRadio($radio){
            $this->radio=$radio;
         }

        public function getRadio():float {
            return $this->radio;
        }

        public function getPI(){
            return $this->VALORPI;
        }

        public function getArea(){
            return (self::VALORPI * $this->radio*$this->radio);
        }

        

        public function __construct(){
            //$this->radio=$radio;
         }
    }

?>