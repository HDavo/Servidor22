<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\Opcion;
    use FormularioCompleto\libreria\OpcionSelect;
    use FormularioCompleto\libreria\Placeholder;
    use FormularioCompleto\libreria\TiposInput;

    class CampoSelect extends CampoMultiple {
        use Placeholder;

        public function __construct($label, $name,TiposInput $type = TiposInput::SELECT, $id, $error, string $placeholder = "", OpcionSelect... $opciones){
            parent::__construct($label, $name, $type, $id, $error);
            $this->placeholder = $placeholder;
            $this->setOpciones(array_merge($this->getOpciones(),$opciones));
        }

        public function contenidoCampos(): string{
            $valorPrevio = (isset($this->getOpciones()[$this->getName()]) && gettype($this->getOpciones()[$this->getName()]) == "string")  ? $this->getOpciones()[$this->getName()] : "";

        return "<label class='form-label'>". $this->getLabel() ."</label> <select class='form-select' name='" . $this->getName() . "' aria-label='Default select example' required >".
            (($valorPrevio === "" && $this->getPlaceHolder() !== "") ? "<option hidden disabled selected value=''>". $this->getPlaceHolder() ."</option>":"") .
        array_reduce($this->getOpciones(), function(string $acumulador, Opcion $valores) use ($valorPrevio) {
            return $acumulador . "<option value='" . $valores->getValue() . "' ". (($valorPrevio === $valores->getValue()) ? "selected" : "") ." id='" . $valores->getId() . "'>". $valores->getLabel() . "</option>";
        }, ""). "</select>";
        }

        public function validarCampos(array $peticion): bool {

            $valido = false;
    
            if (isset($peticion[$this->getName()])){
                $values = array_map(function(Opcion $op) : string {
                    return $op->getValue();
                }, $this->getOpciones());
    
                $valido = in_array($peticion[$this->getName()], $values);
    
            }
            
            return $valido;
        }
    }
?>