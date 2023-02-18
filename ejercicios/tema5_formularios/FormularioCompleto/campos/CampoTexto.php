<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\ExpReg;
    use FormularioCompleto\libreria\Placeholder;
    use FormularioCompleto\libreria\TiposInput;

    class CampoTexto extends Campo {

        use Placeholder; //para incorporar el trait
        
        public function __construct($label, $name, $type = TiposInput::TEXT, $id, string $placeholder = "", $error){
            parent::__construct($label, $name, $type, $id, $error);
            $this->placeholder = $placeholder;
        }

        public function getPlaceholder(): string{
            return $this->placeholder;
        }

        public function setPlaceholder(string $placeholder):Campo{
            $this->placeholder = $placeholder;
            return $this;
        }

        public function contenidoCampos() : string {
            return "
                <label class='form-label'>". $this->getLabel() ."</label>
                <input class='form-control' type='" . $this->getType()->value . "' id='" . $this->getid() . "' name='". $this->getName() ."' placeholder='". $this->getPlaceholder() ."' value='".$this->mantenerCampo($_POST)."' required>
                <div class='invalid-feedback'>
                    ".$this->getError()."
                </div>
            ";
        }

        public function validarCampos(array $peticion): bool {

            return isset($peticion[$this->getName()]) && (preg_match(ExpReg::NOMBRE->value, $peticion[$this->getName()]));
    
        }
    }
?>