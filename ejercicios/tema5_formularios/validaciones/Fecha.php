<?php
    namespace validaciones;

    class Fecha extends General{
        private $inicio;
        private $fin;

        public const AHORA = "now";
        public const MAS_UNA_SEMANA = "+1 week";

        public function __construct($valor, $name, $label, $inicio = self::AHORA, $fin = self::MAS_UNA_SEMANA){
            parent::__construct($valor,$name,$label);
            $this->inicio = strtotime($inicio);
            $this->fin = strtotime($fin);
        }

        function validarEspecifico(){
            /*se añaden las horas porque el campo date en HTML no incluye las horas,
            lo que puede llevar a errores al comparar, y usar strtotime("now"), entre fechas.
            Para evitar este tipo de problemas se añade la hora del envío.
            */
            if(strtotime($this->valor.date("H:i:s")) >= $this->inicio && strtotime(($this->valor.date("H:i:s")) <= $this->fin)){
                return true;
            }else{
                $this->error="Fuera del rango permitido, debe encontrarse entre ".date("Y-m-d",$this->inicio)." y ".date("Y-m-d", $this->fin)." (ambos incluidos).";
                return false;
            }
        }

        function pintar(){
            //pinta el label, input y el error
            echo "<label for='$this->name'>$this->label (entre ".date("Y-m-d",$this->inicio)." y ".date("Y-m-d", $this->fin).")</label>";
            echo "<input type='date' id='" . $this->name . "' name='" . $this->name . "' value='" . $this->valor . "'>";
            $this->imprimirError();
        }
    }
?>