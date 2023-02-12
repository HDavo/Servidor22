<?php
    namespace validaciones;

    class Numero extends General{
        protected $tipo;
        protected $min;
        protected $max;

        public const TYPE_NUMBER="number";

        public const MIN_DEFECTO = 0;
        public const MAX_UNO = 100;
        
        //se pueden añadir otros máximos en función de lo que se necesite

        //constructor para un campo de tipo número
        public function __construct($valor, $name, $label, $tipo=self::TYPE_NUMBER, $min = self::MIN_DEFECTO, $max=self::MAX_UNO){
            parent::__construct($valor,$name,$label);
            $this->tipo = $tipo;
            $this->min = $min;
            $this->max = $max;
        }

        public function validarEspecifico(){
            if($this->valor >= $this->min && $this->valor >= $this->max){
                return true;
            }else{
                $this->error = "Fuera de los límites permitidos, debe seleccionarse un valor entre $this->min y $this->max (ambos incluidos).";
                return false;
            }
        }

        function pintar(){
            echo "<label for='$this->name'>$this->label</label>";
            echo "<input type='$this->tipo' name='$this->name' min='$this->min' max='$this->max' value='$this->valor' placeholder='$this->min - $this->max'>";
        $this->imprimirError();
        }


    }
?>