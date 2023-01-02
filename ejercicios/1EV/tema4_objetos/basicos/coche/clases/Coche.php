
<?php
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
    class Coche {
        private $matricula;
        private $marca;
        private $carga;

       
        //setters
        public function setMatricula(String $matricula){ //se especifica el tipo de variable que se va a recibir
            $this->matricula = $matricula;
        }

        public function setMarca(String $marca) {
            $this->marca = $marca;
        }

        public function setCarga(int $carga) {
            $this->carga = $carga;
        }

        //getters
        public function getMatricula():String{ //los : indican el tipo de variable que va a devolver
            return $this->matricula;
        }

        public function getMarca():String{
            return $this->marca;
        }

        public function getCarga():int{
            return $this->carga;
        }

        //constructor
        public function __construct($matricula ="",$marca="",$carga=""){ //el contenido del parétensis establece una serie de valores por defecto
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->carga = $carga; 
        }

        //método para imprimir la información (de la clase Coche)
        public function imprimir(){
            return "La matrícula del coche es $this->matricula, la marca es $this->marca y su capacidad de carga es de: $this->carga kilos.";
        }


    }
?>
