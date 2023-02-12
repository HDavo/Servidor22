<?php
    namespace validaciones;

    abstract class General{
        protected $valor; //valor del campo
        protected $name; //name dado en el HTML
        protected $label; //texto de la etiqueta label
        protected $error; //se establece un error personalizado por cada campo

        public function __construct($valor = "", $name = "", $label = ""){
            $this->valor = $valor;
            $this->name = $name;
            $this->label = $label;
        }
        
        public function setValor($valor){
            $this->valor = $valor;
        }

        public function getValor(){
            return $this->valor;
        }

        public function getName(){
            return $this->name;
        }

        //Devuelve true en el caso de que el valor no sea nulo ni esté vacío, incluye las validaciones específicas para uno de los tipos

        public function validar(){
            if($this->valor != "" && $this->valor != null){
                return $this->validarEspecifico();
            }else{
                $this->error = "El campo $this->name no puede estar vacío <br>";
            }
        }

        //Para imprimir el error en caso de que exista
        public function imprimirError(){
            if($this->error != null) echo "<div class='error'>$this->error</div>";
        }

        //para evitar ataques xcs
        function limpieza($data){
            if(is_string($data)){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }else{
                return $data;
            }
        }
        
        //Métodos que deben tener las clases que hereden pero que tendrá su implementación específica
        abstract public function pintar(); 

        abstract public function validarEspecifico();
    }
?>