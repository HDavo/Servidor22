<?php

    namespace ejercicio2\clases;
    // require('./Aexamen.php');
    class ExamenChungo extends AExamen{

        public const NOTA_CHUNGO = random_int(0,7);

        public function __construct($nombre){
            parent::intentar($nombre);
        }

        public function obtenerNota():int{
            return self::NOTA_CHUNGO;
        }
    }
?>