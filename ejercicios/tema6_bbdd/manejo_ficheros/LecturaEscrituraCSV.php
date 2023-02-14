<?php
    namespace manejo_ficheros;

    interface LecturaEscrituraCSV{
        public static function fromCSV(string $linea) :mixed;

        public function toCSV() :string;
    }
?>