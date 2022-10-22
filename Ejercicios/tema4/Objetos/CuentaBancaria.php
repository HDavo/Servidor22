<?php
    class CuentaBancaria {
        private $numeroCuenta;
        private $nombre;
        private $saldo;
        private static $cuentaDisponible = 100001;

        public function setNumeroCuenta(int $numeroCuenta){
            $this->numeroCuenta=$numeroCuenta;
        }

        public function setNombre(String $nombre){ 
            $this->nombre=$nombre;
        }

        public function setSaldo(float $saldo){
            $this->saldo=$saldo;
        }

        public function getNumeroCuenta():int{
            return $this->numeroCuenta;
        }

        public function getNombre():String{
            return $this->nombre;
        }

        public function getSaldo():float{
            return $this->saldo;
        }

        /*Para establecer valores por defecto para los objetos obtenidos con el constructor
        se deben establecer dentro del paréntesis los valores deseados para las diferentes variables*/
        public function __construct($nombre="Anónimo", $saldo=0) {
            self::$cuentaDisponible +=1;
            $this->numeroCuenta = self::$cuentaDisponible;
            $this->nombre = $nombre;
            $this->saldo = $saldo;

        }

        public function impresion(){
            return "Titular: ". $nombre ."Numero de cuenta: ".$this->numeroCuenta." Saldo: ".$this->saldo."<br>";
        }

        

        //método para realizar ingresos
        
        public function ingreso(int $cantidadIngresada){
            $this->saldo+=$cantidadIngresada;
            return "Su saldo actual es de $saldo.";
        }

        public function retirada(int $cantidadRetirada){
            $this->saldo-=$cantidadRetirada;
            return "Su saldo actual es de $saldo.";
        }

        public function transferencia(int $cantidadTransferida, int $cuentaDestino) {
            $this->saldo= $saldo - $cantidadTransferida;
            $this->$numeroCuenta=$cuentaDestino;

            $numeroCuenta->ingreso($cantidadTransferida);

            return "Se han transferido  $cantidadTransferida euros a la cuenta $cuentaDestino. <br> Su saldo disponible es de $saldo.";
        }

        public function fusion(int $cuenta){
            $this->saldo += $cuenta->saldo;
            $cuenta->saldo = 0;
            $numeroCuenta->$numeroCuenta-1;

            return "Se ha realizado el traspaso del saldo de la cuenta número $cuenta a su cuenta con una cantidad correspondiente a $cuenta->saldo. <br> Su saldo total es de $saldo.";
        }

        public function bancarrota(){
            $this->saldo=0;
        }
    }
?>
