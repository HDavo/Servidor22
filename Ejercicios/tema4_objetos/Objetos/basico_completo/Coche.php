<?php
    class Coche{
        private $matricula;
        private $marca;
        private $carga;

        public function __construct($matricula = "", $marca = "", $carga = 0){ //establecer valores por defecto
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->carga = $carga;
        }

        public function pintarInformacion(){
            return "<p>Matrícula:</p> ". $this->matricula. "<br><p>Marca: </p>". $this->marca. " <br><p>Carga: </p>". $this->carga."<br>";
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getCarga(){
            return $this->carga;
        }

        public function setCarga($carga){
            $this->carga = $carga;
        }
    }
?>