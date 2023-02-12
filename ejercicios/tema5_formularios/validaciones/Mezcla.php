<?php 
    namespace validaciones;

    class Mezcla extends General{
        private $tipo;
        private $cosa = [];

        public const TYPE_CHECKBOX = "checkbox";
        public const TYPE_RADIO = "radio";
        public const TYPE_SELECT = "select";

        public function __construct($valor, $name, $label, $tipo=self::TYPE_CHECKBOX, $cosa = []){
            parent::__construct($valor,$name,$label);
            $this->tipo = $tipo;
            foreach ($cosa as $valor){
                array_push($this->cosa, $valor);
            }
        }

        public function validarEspecifico(){
            $esValido = true;

            //en el caso de que sea un checkbox
            if(strtolower($this->tipo) == "checkbox"){
                //para que la validacion devuelva true todos los valores del checkbox deben ser válidos
                foreach ($this->cosa as $val) {
                    if (!(in_array($val, $this->cosa)))
                        $esValido = false;
                }
                $esValido ? $this->error = "" : $this->error = "No puedes modificar los valores del checkbox";
            }else{ //para cuando sea radio o select

                if(in_array($this->valor, $this->cosa)){
                    $esValido = true;
                    $this->error = "";
                }else{
                    $esValido = false;
                    $this->error = "No puedes cambiar los valores de la lista";
                }
            }
            return $esValido;
        }
        
        public function pintar(){
            echo "<label for='" . $this->name . "'>" . $this->label . "</label>";
    
            //si es checkbox
            if (strtolower($this->tipo) == "checkbox") {
                $checked ="";
                echo "<div class='checkbox'>";
                foreach ($this->cosa as $value) {
                    //por cada input checkbox, comprueba que el valor NO ESTÉ MARCADO
                    if(!empty($this->getValor()))
                        //si no lo está, no lo marca, si lo está lo marca (check)
                        (in_array($value, $this->getValor())) ? $checked = "checked" : $checked = "";
    
                    echo "<label for='".$value."'>$value</label> <input type='checkbox' id='$value' name='".$this->getName()."[]' value='$value' $checked >";
                }
                echo "</div>";
            //si es radio
            }else if(strtolower($this->tipo) == "radio"){
                echo "<div>";
                $checked ="";
                foreach ($this->cosa as $value) {
                    //comprueba que esté seleccionado y lo deja seleccionado si lo estaba
                    ($this->getValor() == $value) ? $checked = "checked" : $checked = "";
                    echo "<input type='radio' id='$value' name='".$this->name."' value='$value' $checked>";
                    echo "<label for='$value'>$value</label><br>";
                }
                echo "</div>";
            //si es select
            }else{
                echo "<select id='".$this->name."' name='".$this->name."'>";
                $selected = "";
                foreach ($this->cosa as $value) {
                    //comprueba que esté seleccionado y lo deja seleccionado si lo estaba
                    ($this->getValor() == $value) ? $selected = "selected" : $selected = "";
                    echo "<option value='$value' $selected > $value </option>";
                }
                echo '</select>';
            }
            
            //error personalizado impreso debajo del div
            $this->imprimirError();
        }
    }
?>