<?php
    namespace Clases;

    trait Descripcion{
        private $descripcion;

        function setDescripcion(string $descripcion){
            $this->descripcion = $descripcion;
        }

        function getDescripcion():String{
            return $this->descripcion;
        }

    }
?>