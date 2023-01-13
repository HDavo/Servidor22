<?php
    namespace Clases;

    trait Posicion{
        private $posicionX;
        private $posicionY;
        private $posicionZ;

        public function setPosicionX(float $x){
            $this->posicionX = $x;
        }

        public function getPosicionX():float{
            return $this->posicionX;
        }

        public function setPosicionY(float $y){
            $this->posicionY = $y;
        }

        public function getPosicionY():float{
            return $this->posicionY;
        }

        public function setPosicionZ(float $z){
            $this->posicionZ = $z;
        }

        public function getPosicionZ():float{
            return $this->posicionZ;
        }

        public function getPosicion():float{
            return "X: $this->posicionX, Y: $this->posicionY, Z: $this->posicionZ";
        }
    }

?>