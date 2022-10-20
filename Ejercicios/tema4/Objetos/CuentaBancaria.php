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
            return "Numero de cuenta: ".$this->numeroCuenta." Saldo: ".$this->saldo."<br>";
        }

        //método para realizar ingresos
        
    }
?>