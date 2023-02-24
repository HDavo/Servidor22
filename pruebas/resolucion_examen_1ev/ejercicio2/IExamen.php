<?php
    namespace ejercicio2\clases;

    interface IExamen{
        public function intentar(string $nombre); //esto significa que es el tipo de dato que debe recibir
        public function obtenerNota():int; //esto define el tipo de variable que debe devolver la función al ser implementada
    }
?>