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

        public function descargar(Coche $encima){
            $this->encima = null;
            $this->cocheCargado = false;
        }

        public function __construct($matricula="",$marca="",$carga="",$cocheCargado=false){
            parent::__construct($matricula, $marca, $carga);
            $this->cocheCargado = $cocheCargado;
        }

        //este método no imprime la información del coche grúa
        public function imprimir(){
            if($this->cocheCargado){
                return "La información del coche grúa es: <br>".parent::imprimir(). "Se encuentra libre.";
            }else{
                return " ".parent::imprimir()." ".($this->cocheCargado)." " ;
            }
        }

    }
?>