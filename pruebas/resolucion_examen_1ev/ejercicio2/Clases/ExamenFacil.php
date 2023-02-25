<?php 
    namespace Clases;

    // require('./Aexamen.php');

    class ExamenFacil extends AExamen{
        private const NOTA_MIN = 5;
        private const NOTA_MAX = 10;
        

        function __construct($nombre){
            parent::intentar($nombre);
        }
        function obtenerNota():int{
            return rand(self::NOTA_MIN, self::NOTA_MAX);
        }
    }



?>