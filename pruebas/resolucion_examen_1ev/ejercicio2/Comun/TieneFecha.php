<?php
 
namespace Comun;

    trait TieneFecha{
        protected $fecha;

        function setFecha($fecha){
            $this->fecha = $fecha;
        }
        
        function getFecha(){
            return $this->fecha;
        }
    }
?>