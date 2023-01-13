<?php
    namespace Clases;
    class Humano implements Personaje{
        use Posicion;

        function atacar(){
            print "Puñetazo<br>";
        }

        function defender(){
            print "Bloqueo<br>";
        }
    }

?>