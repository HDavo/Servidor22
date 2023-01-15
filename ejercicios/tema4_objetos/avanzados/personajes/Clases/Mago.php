<?php
    namespace Clases;

    abstract class Mago implements Personaje{
        use Posicion;
        
        function defender(){
            print "Hechizo protector<br>";
        }

        abstract function atacar();
    }


?>