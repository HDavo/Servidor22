<?php 
    class BitCoinConan implements IPlataformaPago{

        public function estableceConexion():bool{
            print "Conexión BitCoin Conan <br> ";
            return true;
        }

        public function compruebaSeguridad(): bool{
            print "Conexión seguro BitCoin Conan <br>";
            return true;
        }

        public function pagar(string $cuenta, int $cantidad){
            print "Pago realizado de $cantidad, a través de BitCoinConan <br> ";
        }
    }


?>