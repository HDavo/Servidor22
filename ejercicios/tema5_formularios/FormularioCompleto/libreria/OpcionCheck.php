<?php
    namespace FormularioCompleto\libreria;

use FormularioCompleto\libreria\Opcion;

    
    class OpcionCheck extends Opcion {
        private string $name;

        public function __construct($label, $value, $id, string $name = "") {
            parent::__construct($label,$value,$id);
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;

            return $this;
        }

        public function pintarOp(): string {
            return " <input type='".TiposInput::CHECKBOX->value."' id='".$this->getId()."' name='".$this->name."' value='".$this->getValue()."'>
            <label for='".$this->getId()."'>".$this->getLabel()."<br>"; 
        }
    }
?>