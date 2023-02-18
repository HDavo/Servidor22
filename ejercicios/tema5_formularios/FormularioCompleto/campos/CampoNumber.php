<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\ExpReg;
    use FormularioCompleto\libreria\HttpMethod;
    use FormularioCompleto\libreria\TiposInput;

    class CampoNumber extends CampoTexto{
        private int $maximo;
        private int $minimo;

        public function __construct($label, $name, TiposInput $type = TiposInput::NUMBER, $id, $placeholder, $error, mixed $maximo = "", mixed $minimo = ""){
            parent::__construct($label,$name, $type, $id, $placeholder, $error);
            $this->maximo = $maximo;
            $this->minimo = $minimo;
        }

        public function contenidoCampos() : string {
            return "
                <label class='form-label'>". $this->getLabel() ."</label>
                <input class='form-control' id='" . $this->getId() . "' type='" . $this->getType()->value . "' name='". $this->getName() ."' placeholder='". $this->getPlaceholder() ."' min='" . $this->minimo . "' max='" . $this->maximo . "' value='".$this->mantenerCampo($_POST)."'required >
                <div class='invalid-feedback'>
                    ".$this->getError()." ". $this->minimo ." y ". $this->maximo ."
                </div>
            ";
        }

        public function validarCampos(array $peticion): bool {

            return isset($peticion[$this->getName()]) && (preg_match(ExpReg::NUMERO->value, $peticion[$this->getName()]));
         
        }
    }
?>