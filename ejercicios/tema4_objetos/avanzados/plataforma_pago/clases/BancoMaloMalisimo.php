<?php

    class BancoMaloMalisimo implements IPlataformaPago{
        public function estableceConexion():bool{
            print "Conexión BancoMaloMalisimo <br>";
            return true;
        }
        
        public function compruebaSeguridad():bool{
            print "Conexión segura BancoMaloMalisimo <br>";
            return true;
        }

        public function pagar(string $cuenta, int $cantidad){
            print "Pago realizado de $cantidad, a través de BancoMaloMalisimo <br>";
        }
    }

?>