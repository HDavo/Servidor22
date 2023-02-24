<?php
    namespace ejercicio2\clases\comun;

    trait TieneFecha{
        private $fecha;

        private function setFecha($fecha){
            $this->fecha = $fecha;
        }
        
        private function getFecha(){
            return $this->fecha;
        }

       


    }

?>