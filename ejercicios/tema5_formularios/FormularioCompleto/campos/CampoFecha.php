<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\ExpReg;
    use FormularioCompleto\libreria\Fecha;
    use FormularioCompleto\libreria\HttpMethod;
    use FormularioCompleto\libreria\TiposInput;

    class CampoFecha extends Campo {
        public function __construct__($label, $name, TiposInput $type= TiposInput::DATE, $id, $error){
            parent::__construct($label,$name,$type,$id,$error);
        }

        public function contenidoCampos() : string {
            return "
                <label class='form-label'>". $this->getLabel() ."</label>
                <input class='form-control' type='" . $this->getType()->value . "' id='" . $this->getid() . "' name='". $this->getName() ."' value='".$this->mantenerCampo($_POST)."' required>
                <div class='invalid-feedback'>
                    ".$this->getError()."
                </div>          
            ";
        }


	public function validarCampos(array $peticion): bool {
        
        $valido = false;
        if (isset($peticion[$this->getName()])) {
            if (preg_match(ExpReg::DATE->value, $peticion[$this->getName()])) {
                try {
                    $fecha = Fecha::fromYYYYMMDD($peticion[$this->getName()], "-");
                    $valido = true;
                } catch (\Exception $e) {

                }
            }
            
        }

        return $valido;

	}

    public function campoValidado(): string {

        return "true";
	}
    }
?>