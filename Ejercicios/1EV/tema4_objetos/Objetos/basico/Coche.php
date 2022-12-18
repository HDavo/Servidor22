
<?php
    class Coche {
        private $matricula;
        private $marca;
        private $carga;

       

        public function setMatricula(String $matricula){
            $this->matricula = $matricula;
        }

        public function setMarca(String $marca) {
            $this->marca = $marca;
        }

        public function setCarga(int $carga) {
            $this->carga = $carga;
        }

        public function getMatricula():String{
            return $this->matricula;
        }

        public function getMarca():String{
            return $this->marca;
        }

        public function getCarga():int{
            return $this->carga;
        }

        public function __construct($matricula ="",$marca="",$carga=""){
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->carga = $carga; 
        }

        //método para imprimir pla información (de la clase Coche)
        public function imprimir(){
            return "La matrícula del coche es $this->matricula, la marca es $this->marca y su capacidad de carga es de: $this->carga kilos.";
        }


    }

    /* 
Crear una clase Coche
    Tendrá atributos (privados):
    - matricula
    - marca
    - carga

    Métodos (públicos): 
    -Pintar información
    -getters y setters

    Crea una clase CocheConRemolque
    Tendrá atributos:
    -capacidadRemolque

    métodos (público)
    los mismos métodos (heredados)
    setter y getter de capacidad de remolque
*/
?>
