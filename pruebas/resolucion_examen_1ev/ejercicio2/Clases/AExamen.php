<?php 
    namespace Clases;

    
    abstract class AExamen implements IExamen{
        
        use \Comun\TieneFecha;
        private $nombre;
        
        function intentar(string $nombre){
            $this->nombre = $nombre;
        }

        abstract function obtenerNota():int;
    }
?>