<?php
    namespace validaciones;
    //para validaciones de campos de tipo: text, textarea y password
    class Texto extends General{
        private $tipo;
        private $placeholder;
        private $patron;

        //Expresiones regulares, por defecto, que pueden usarse
        public const DEFAULT_PATTERN_25 = "/^[a-zA-Z0-9\s\,\.\¿\?\!\¡\_\-]{1,25}$/";
        public const DEFAULT_PATTERN_500 = "/^[a-zA-Z0-9\s\,\.\¿\?\!\¡\_\-]{1,25}$/";

        public const TYPE_TEXT = "text";
        public const TYPE_TEXT_AREA = "textarea";
        public const TYPE_PASS = "password";

        public function __construct($valor, $name, $label, $tipo = self::TYPE_TEXT, $placeholder, $patron = self::DEFAULT_PATTERN_25){
            parent::__construct($valor,$name,$label);
            $this->tipo = $tipo;
            $this->placeholder = $placeholder;
            $this->patron = $patron;
        }

        function validarEspecifico(){
            //Se compara el texto recibido después de haber pasado por la función limpieza con el patrón (expresión regular) establecido
            if(preg_match($this->patron, $this->limpieza($this->valor))){
                return true;
            }else{
                //¿sería mejor meter la comparación de la longitud en la parte del if?
                $longitud = ($this->tipo == self::TYPE_TEXT_AREA)? 500 : 25;
                $this->error = "No se admiten carácteres especiales y el tamaño máximo es de $longitud caracteres.<br>";
                return false;
            }
        }

        function pintar(){
            //label, input y error
            echo "<label for='" . $this->name . "'>" . $this->label . "</label>";
            if ($this->tipo == self::TYPE_TEXT_AREA)
            echo "<textarea id='" . $this->name . "' name='" . $this->name . "' placeholder='$this->placeholder' rows='8' cols='50'>$this->valor</textarea>";
            else
            echo "<input type='$this->tipo' id='" . $this->name . "' name='" . $this->name . "' placeholder='$this->placeholder' value='" . $this->valor . "'>";
        
            $this->imprimirError();
        }

    }
?>