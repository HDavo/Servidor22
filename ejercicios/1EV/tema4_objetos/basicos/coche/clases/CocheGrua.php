<?php
    class cocheGrua extends Coche{
        private $cocheCargado;
        private $encima;
        
        public function setCocheCargado(bool $cocheCargado){
            $this->cocheCargado = true;
        }

        public function getCocheCargado():bool{
            return $this->cocheCargado;
        }

        public function cargar(Coche $encima){
            $this->encima = $encima;
            $this->cocheCargado = true;
        }

        public function descargar(){
            $this->encima = null;
            $this->cocheCargado = false;
        }

        public function __construct($matricula="",$marca="",$carga="",$cocheCargado=false){
            parent::__construct($matricula, $marca, $carga);
            $this->cocheCargado = $cocheCargado;
        }

        //ya imprime la información del coche que está encima de la grúa
        public function imprimir(){
            if($this->cocheCargado){
                return " ".parent::imprimir()." Esta cargado con el coche: ".($this->encima->imprimir())." " ;
            }else{
                
                return "La información del coche grúa es: <br>".parent::imprimir(). "Se encuentra libre.";
            }
        }

    }
?>