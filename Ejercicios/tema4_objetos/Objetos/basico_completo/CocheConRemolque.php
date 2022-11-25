<?php
    class CocheConRemolque extends Coche{
        private $capacidadRemolque;

        public function __construct($matricula,$marca,$carga,$capacidadRemolque = 0){ //¿los valores por defecto, para los atributos heredados, deben establecerse también en las clases hijas o se heredan directamente?
            parent::__construct($matricula,$marca,$carga);
            $this->capacidadRemolque = $capacidadRemolque;
        }

        public function getCapacidadRemolque(){
            return $this->capacidadRemolque;
        }

        public function setCapacidadRemolque($capacidadRemolque){
            $this->capacidadRemolque = $capacidadRemolque;
            //¿los set deben llevar un return?
        }

        public function pintarInformacion(){
            return parent::pintarInformacion()." y remolque de: ".$this->capacidadRemolque; 
        }

    }
>?