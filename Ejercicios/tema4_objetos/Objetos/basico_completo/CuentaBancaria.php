<?php

    class CuentaBancaria{
        private static $contadorCuenta = 10001;
        private $numeroCuenta;
        private $nombre; 
        private $saldo;
        //constantes sin dolar
        //static y el resto con el $

       public function __construct($nombre='anonimo',$saldo=0){ //forma de especificar valores por defecto 
        $this->numeroCuenta = ++self::$contadorCuenta; //prefijo para acceder a constantes o métodos/ estáticos dentro de la clase.
        $this->nombre = $nombre;
        $this->saldo = $saldo;
       }

       public function getNumeroCuenta(){
        return $this->numeroCuenta;
       }

       public function setNumeroCuenta($numeroCuenta){ //siempre se manda el valor en el paréntesis 
        $this->numeroCuenta = $numeroCuenta;
       }

       public function getNombre(){
        return $this->Nombre;
       }

       public function setNombre($nombre){
        $this->nombre = $ nombre;
       }

       public function getSaldo(){
        return $this->saldo;
       }

       public function setSaldo($saldo){
        $this->saldo = $saldo;
       }

       //Métodos

       //los valores por defecto se han puesto en el constructor

       public function ingresar(float $cantidad){ //forma de especificar el tipo de valor que queremos recibir
        $this->saldo +=$cantidad; //se aumenta el saldo previo con la cantidad introducida como ingreso
       }

       public function retirar(float $cantidad){
        $this->saldo -=$cantidad;
       }

       public function darSaldo():float{
        return $this->saldo;
       }

       public function transferenciaA($cuentaBancaria, $cantidad){
        $this->saldo-=$cantidad;
        $cuentaBancaria->ingresar($cantidad); 

        return "Has realizado una transferencia de $cantidad euros a la cuenta $cuentaBancaria->numeroCuenta."
       }

       public function unirCon($cuentaDestino){
        $this->saldo += $cuentaDestino->saldo;
        $cuentaBancaria->saldo = 0; //al traspasar el saldo a otra cuenta, ponemos el de esta a 0.
        $cuentaBancaria->numeroCuenta = -1;
       }    

       public function bancarrota(){
        $this->saldo = 0;
       }

       public function mostrar() {
        return "Nombre: ".$this->nombre." Nº Cuenta: ".$this->numCuenta." Saldo: ".$this->saldo;
    }

    }

?>