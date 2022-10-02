<?php
    //objetos de php: tipos de acceso, creación y métodos
    
    //definición de una clase
    class persona {

        public $nombre; //definición de una propiedad del objeto
        private $edad; 
        /* solo se accede directamente a través de la clase o a través de los métodos propios (limita las impresiones generales).
        modificaciones también a través de métodos*/
        protected $altura;

        //ejemplo de método
        /* ¿el número de elementos dentro de la llamada del método tiene que ser el mismo que en la creación del método?*/

        public function asignarNombre($nuevoNombre){

            $this->nombre=$nuevoNombre;
        }

       public function imprimirNombre(){

            // print("Hola soy ".$this->nombre);
            echo "Hola soy ".$this->nombre; //original
       }

       public function mostrarEdad(){
        
            $this->edad=20;
            return $this->edad;
       }

    }

    $objAlumno = new persona(); //creacion de un objeto de la clase persona.

    //invocacion de un método (siempre debe usarse junto a un objeto de la clase que contiene el método).

    $objAlumno->asignarNombre("Pepe "); //llamada al método

    //impresión de una propiedad sin usar un método para hacerlo. SE DEBE SEÑALAR EL OBJETO CUYA PROPIEDAD QUEREMOS ACCEDER
    echo $objAlumno->nombre; 
    $objAlumno2 = new persona();
    $objAlumno2->asignarNombre("Manolo ");

   

    echo $objAlumno2->nombre;

    //impresión usando un método creado para hacerlo
    $objAlumno->imprimirNombre();
    $objAlumno2->imprimirNombre();

    echo $objAlumno2->mostrarEdad();
    // echo $objAlumno->edad; //no funciona al ser private

   
?>