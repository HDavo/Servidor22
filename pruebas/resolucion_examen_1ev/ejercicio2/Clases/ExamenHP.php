<?php

    namespace Clases;
    // require('./Aexamen.php');
    class ExamenHp extends AExamen{
        private const MIN = 4;
        private const MAX = 5;

        function __construct($nombre){
            parent::intentar($nombre);
        }

        function obtenerNota():int{
            return rand(self::MIN,self::MAX);
        }
    }

?>