<?php
    namespace manejo_ficheros;

use Exception;
use Usuario;

    class AccesoFicheros{
        private const NOMBRE_FICHERO = "";
        private static AccesoFicheros $conseguirDatos;

        private function __construct(){}

        public static function getSingletone():AccesoFicheros{
            if(!isset(self::$conseguirDatos)){
                self::$conseguirDatos = new AccesoFicheros ();
            }
            return self::$conseguirDatos;
        }

        public function EscrituraFichero(Usuario $usuario){
            file_put_contents( //Escribe los datos en un fichero
                filename: self::NOMBRE_FICHERO,
                data: $usuario->toCSV(). "\n",
                flags: FILE_APPEND //en el caso de que exista un fichero con ese nombre, añade la información a la ya existente
            );
        }

        public function LecturaFichero(): array {
            $cosa = [];

            if(file_exists(self::NOMBRE_FICHERO)){
                $lineas = explode("\n", file_get_contents(self::NOMBRE_FICHERO));
                try{
                    for($i = 0; $i < count($lineas) -1; $i++){
                        $cosa[] = Usuario::fromCSV($lineas[$i]);
                    }
                }catch (Exception $th){

                }
            }
            return $cosa;
        }
    }
?>