<?php
    namespace FormularioCompleto\libreria;

    trait Placeholder {
        public function getPlaceholder():string {
            return $this->placeholder;
        }

        public function setPlaceholder($placeholder) {
            $this->placeholder = $placeholder;
        }
    }
?>