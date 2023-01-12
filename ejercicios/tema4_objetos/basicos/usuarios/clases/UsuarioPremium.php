<?php
    class UsuarioPremium extends Usuario{

        public function __construct($nombre="", $apellidos="",$deporte){
            parent::__construct($nombre." (Usuario Premium)", $apellidos, $deporte);
            $this->limiteAdmPre;
        }

        public function imprimir(){
            return "<p>".parent::imprimir()."</p>";
        }
    }

?>