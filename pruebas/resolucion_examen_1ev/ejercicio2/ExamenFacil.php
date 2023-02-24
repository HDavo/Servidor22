<?php 
    namespace ejercicio2\clases;

    // require('./Aexamen.php');

    class ExamenFacil extends AExamen{
        const NOTA_MIN=5;
        const NOTA_MAX=10;
        

        public function __construct($nombre){
            parent::intentar($nombre);
        }
        public function obtenerNota(){
            return rand(self::NOTA_MIN, self::NOTA_MAX);
        }
    }



?>