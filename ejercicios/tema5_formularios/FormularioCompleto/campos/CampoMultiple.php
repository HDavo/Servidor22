<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\Opcion;
    use FormularioCompleto\libreria\TiposInput;


    abstract class CampoMultiple extends Campo {
        private array $opciones;

        public function __construct($label, $name, $type = TiposInput::RADIO_BUTTON, $id, $error){
            parent::__construct($label, $name, $type, $id, $error);
            $this->opciones = [];
        }

        public function getOpciones(){
            return $this->opciones;
        }

        public function setOpciones($opciones){
            $this->opciones = $opciones;

            return $this;
        }

        public function addOpcion(Opcion $op){
            $this->opciones[] = $op;
        }
    }
?>