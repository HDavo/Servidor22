<?php

    class BancoMalvado implements IPlataformaPago{

        public function estableceConexion(): bool{
            print "Conexión BancoMalvado <br>";
            return true;
        }

        public function compruebaSeguridad(): bool{
            print "Conexión segura BancoMalvado <br>";
            return true;
        }

        public function pagar(string $cuenta, int $cantidad){
            print "Pago realizado de $cantidad, a través de BancoMalvado <br>";
        }   
        
    }
?>  