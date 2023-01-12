<?php

    class Singleton {
        //para usarlo en otras cosas es necesario poner un require
        private $nombre;

        private static $config;

        public static function singleton(){
            //en el caso de que no exista un $config se crea mediante singleton, en el caso de que exista se devuelve el ya existente
            if(!isset(self::$config)){
                self::$config = new Singleton();
            }
            return self::$config;
        }

        //el constructor debe ser privado para evitar que se pueda volver a instanciar

        private function __construct(){}

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }
    }
?>