<?php
    namespace FormularioCompleto\libreria;

use FormularioCompleto\libreria\Opcion;

    
    class OpcionRadio extends Opcion {
        private string $name;

        public function __construct($label, $value, $id, string $name){
            parent::__construct($label, $value, $id);
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
            return "
                <div class='form-check'>
                    <input class='form-check-input' type='" . TiposInput::RADIO_BUTTON->value . "' name='" . $this->name . "' id='". $this->getId() ."' value='" . $this->getValue() ."'required>
                    <label class='form-check-label' for='" . $this->getId() . "'> " . $this->getLabel() . " </label>
                </div>";
        }
    }
?>