<?php
    namespace Clases;

    trait Posicion{
        private $posicionX;
        private $posicionY;
        private $posicionZ;

        public function setPosicionX(float $x){
            $this->posicionX = $x;
        }

        public function getPosicionX(){
            return $this->posicionX;
        }

        public function setPosicionY(float $y){
            $this->posicionY = $y;
        }

        public function getPosicionY(){
            return $this->posicionY;
        }

        public function setPosicionZ(float $z){
            $this->posicionZ = $z;
        }

        public function getPosicionZ(){
            return $this->posicionZ;
        }

        public function getPosicion(){
            $posicionGen = "La posición general es "."X: $this->posicionX, Y: $this->posicionY, Z: $this->posicionZ<br>";
            return $posicionGen;
        }
    }

?>