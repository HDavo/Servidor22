<?php
    namespace FormularioCompleto\libreria;

    use \libreria\Opcion; 
    
    class OpcionSelect extends Opcion {
        private string $id;
        private string $name;

        public function __construct($label, $value, string $id = "", string $name = ""){
            parent::__construct($label, $value);
            $this->id = $id;
            $this->name = $name;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;

            return $this;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
            return $this;
        }

        public function pintarOp(): string{
            return "<option name='". $this->name ."' id='". $this->id ."' value='".  $this->getValue() ."'>". $this->getLabel() ."</option>";
        }
    }
?>