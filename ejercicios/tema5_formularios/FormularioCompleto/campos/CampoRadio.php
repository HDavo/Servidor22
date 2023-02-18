<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\OpcionRadio;
    use FormularioCompleto\libreria\TiposInput;

    class CampoRadio extends CampoMultiple{
        private string $value;

        private function __construct($label, $name, TiposInput $type = TiposInput::RADIO_BUTTON, $id, $error, string $value = "", $opciones){
            parent::__construct($label, $name, $type, $id, $error, $opciones);
            $this->value = $value;
        }   

        public function getValue(){
            return $this->value;
        }
    
    
        public function setValue($value){
            $this->value = $value;
    
            return $this;
        }

        public function contenidoCampos() : string {
            return "<div class='mb-3'>
                <label class='form-label'>". $this->getLabel() ."</label>"       
                . array_reduce($this->getOpciones(), function(string $acumulador, OpcionRadio $opcion) {
                    return $acumulador.$opcion->pintarOp();
            }, "")."</div>";
        }

        public function validarCampos(array $peticion): bool {

            $valido = false;
    
            if (isset($peticion[$this->getName()])) {
                $valores = array_map(function (OpcionRadio $op) : string {
                    return $op->getValue();
                }, $this->getOpciones());
                
                $valido = in_array($peticion[$this->getName()],$valores);
                
            }
            
            return $valido;
           
        }


    }
?>