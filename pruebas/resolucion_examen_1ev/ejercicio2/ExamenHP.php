<?php

    namespace ejercicio2\clases;
    // require('./Aexamen.php');
    class ExamenHp extends AExamen{
        public const NOTA_HP=random_int(4,5);

        public function __construct($nombre){
            parent::intentar($nombre);
        }

        public function obtenerNota():int{
            return self::NOTA_HP;
        }
    }

?>