<?php
    class Circulo {
        private $radio;

        public function getRadio(){ //en caso de que sea un singleton si que podrían ser privadas
            return $this->radio;
        }

        public function setRadio($radio){
            $this->radio = $radio;
        }


    }

?>