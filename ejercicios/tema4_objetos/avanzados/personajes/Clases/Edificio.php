<?php
    namespace Clases;

    class Edificio{

        use Descripcion;
        use Posicion;
        
        private $altura;

        public function setAltura(float $altura){
            $this->altura = $altura;
        }

        public function getAltura():float{
            return $this->altura;
        }
    }

?>