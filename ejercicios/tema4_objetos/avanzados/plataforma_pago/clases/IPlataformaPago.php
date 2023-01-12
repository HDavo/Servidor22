<?php 

    interface IPlataformaPago{
        public function estableceConexion():bool;
        public function compruebaSeguridad():bool;
        public function pagar(string $cuenta, int $cantidad);
    }


?>