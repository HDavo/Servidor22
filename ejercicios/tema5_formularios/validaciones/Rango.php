<?php
    namespace validaciones;

    class Rango extends Numero{
        private $salto;
        public const TYPE_RANGE="range";
        public const SALTO = 5; 

        //constructor para un campo de tipo range
        
        public function __construct($valor, $name, $label, $tipo=self::TYPE_RANGE, $min, $max, $salto=self::SALTO){
            parent::__construct($valor,$name,$label,$tipo,$min,$max);
            $this->salto = $salto;
        }
       
       /*  public function validarEspecifico(){
            if($this->valor >= $this->min && $this->valor >= $this->max){
                return true;
            }else{
                $this->error = "Fuera de los límites permitidos, debe seleccionarse un valor entre $this->min y $this->max (ambos incluidos).";
                return false;
            }
        } */

        function pintar(){
            echo "<label for='$this->name'>$this->label</label>";
            echo "<input type='$this->tipo' name='$this->name' min='$this->min' max='$this->max' value='$this->valor' placeholder='$this->min - $this->max' step='$this->salto'>";
            $this->imprimirError();
        }
    }
?>