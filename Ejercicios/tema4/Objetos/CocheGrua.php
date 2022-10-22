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

        public function imprimir($matricula, $marca,$carga){
            if(!$cocheCargado){
                return "La información del coche grúa es: <br>".parent::imprimir(). "Se encuentra libre.";
            }else{
                return parent::imprimir()." ".($this->cocheCargado)." " ;
            }
        }
    }
?>