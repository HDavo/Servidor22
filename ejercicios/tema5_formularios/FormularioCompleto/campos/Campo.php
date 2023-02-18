<?php
    namespace FormularioCompleto\campos;

    use FormularioCompleto\libreria\TiposInput;

    abstract class Campo {
        private string $label;
        private string $name;
        private TiposInput $type;
        private string $id;

        private string $error;

        public function __construct(string $label="", string $name = "", TiposInput $type = TiposInput::TEXT, string $id = "", string $error = ""){
            $this->label = $label;
            $this->name = $name;
            $this->type = $type;
            $this->id = $id;
            $this->error = $error;
        }

        public function getId() : string{
            return $this->id;
        }
    
        public function setId($id) : Campo{
            $this->id = $id;
            return $this;
        }
        
        public function getLabel() : string{
            return $this->label;
        }
    
        public function setLabel(string $label) : Campo {
            $this->label = $label;
            return $this;
        }
    
        public function getName(): string {
            return $this->name;
        }
        public function setName(string $name) : Campo {
            $this->name = $name;
            return $this;
        }
    
        public function getType(){
            return $this->type;
        }
    
        public function setType($type){
            $this->type = $type;
    
            return $this;
        }
        public function getError(){
            return $this->error;
        }
    
    
        public function setError($error){
            $this->error = $error;
    
            return $this;
        }

        public function crearCampo() : string {
            return "
            <div class='mb-3'>
                " . $this->contenidoCampos(). "
            </div>
            ";
        }
        
        public abstract function contenidoCampos(): string;

        public abstract function validarCampos(array $peticion): bool;

        protected function mantenerCampo(array $peticion): string {
            return isset($peticion[$this->getName()]) ? $peticion[$this->getName()] : "";
        }
    }
?>