<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\ExpReg;
    use FormularioCompleto\libreria\TiposInput;
    // use FormularioCompleto\libreri;

    class CampoEmail extends CampoTexto {
        public function __construct($label, $name, $type = TiposInput::EMAIL, $id, string $placeholder, $error){
            parent::__construct($label,$name,$type, $placeholder, $id, $error);
        }

        public function contenidoCampos() : string {
            return "
                <label class='form-label'>". $this->getLabel() ."</label>
                <input class='form-control' type='" . $this->getType()->value . "' id='" . $this->getid() . "' name='". $this->getName() ."' placeholder='". $this->getPlaceholder() ."' value='".$this->mantenerCampo($_POST)."' required >
                <div class='invalid-feedback'>
                ".$this->getError()."
            </div>
            ";
        }

        public function validarCampos(array $peticion): bool {

            return isset($peticion[$this->getName()]) && (preg_match(ExpReg::CORREO->value, $peticion[$this->getName()]));
        
        }
    }


?>