<?php

    namespace Clases;
    // require('./Aexamen.php');
    class ExamenChungo extends AExamen{

        private const NOTA_MIN = 0;
        private const NOTA_MAX = 7;

        function __construct($nombre){
            parent::intentar($nombre);
        }

        function obtenerNota():int{
            return rand(SELF::NOTA_MIN,SELF::NOTA_MAX);
        }
    }
?>