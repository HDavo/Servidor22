<?php
    class UsuarioAdmin extends Usuario{

    //    private $descAdm = 0;
    //    private $ascAdm = 0;

       public function __construct($nombre="admin",$apellidos="", $deporte=""){
            parent::__construct($nombre." (Admin)", $apellidos, $deporte); //llamada a la clase padre y personalización
            $this->limiteAdmPre =3;
        }

        public function imprimir(){
            return "<p>".parent::imprimir()."</p>";
        }


    }
?>