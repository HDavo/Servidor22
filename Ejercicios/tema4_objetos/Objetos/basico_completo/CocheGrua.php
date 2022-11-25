<?php
    class CocheGrua extends Coche{
        private $cocheCargado;

        public function __construct($matr, $marc, $carga, $cocheCargado = null){
            parent::__construct($matr,$marc,$carga);
            $this->cocheCargado = $cocheCargado;
        }

        public function getCocheCargado(){
            return $this->cocheCargado = $cocheCargado;
        }

        public function setCocheCargado(){
            $this->cocheCargado = $cocheCargado;
        }

        public function pintarInformacion(){
            $mostrar = parent::pintarInformacion();
            //se concatena la variable que contiene el método de la clase padre y se concatena con el contenido de la clase hija
            $mostrar.= (is_object($this->cocheCargado))?"<br> Lleva coche: <br>".$this->cocheCargado->pintarInformacion():" No lleva ningún coche."; 
            //mediante la ternaria se verifica que existe un objeto de tipo de coche y si existe se pinta su información, en caso contrario se pinta un mensaje.

        }

        //métodos propios
        public function cargar($Coche){
            $this->cocheCargado = $Coche; //se pone un objeto de tipo Coche dentro del CocheGrua
        }

        public function descargar(){
            $this->cocheCargado = null; 
        }
    }

?