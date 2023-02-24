<?php 
    namespace ejercicio2\clases;
    // require('./IExamen.php');
    // require('./comun/TieneFecha.php');
    abstract class AExamen implements IExamen{
        
        use comun\TieneFecha;
        private $nombre;
        
        public function intentar(string $nombre){
            $this->nombre = $nombre;
        }
    }
?>