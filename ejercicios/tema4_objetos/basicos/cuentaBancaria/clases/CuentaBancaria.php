<?php

     /*
    Crea la clase CuentaBancaria
Atributos:
    numerocuenta
    nombre
    saldo
Los números de cuenta se crearán de forma consecutiva después del 100001. Debes utilizar elementos estáticos
Métodos:
    constructor con todos los parámetros y valores por defecto ('anónimo', saldo 0)
    ingresar(float)
    retirar(float)
    saldo():float
    transferirA(CuentaBancaria, cantidad):
        La cuenta que recibe el mensaje transfiere la cantidad a la otra cuenta
    unirCon(CuentaBancaria):
        La cuenta que recibe el mensaje coge el saldo de la que es pasada como parámetro
        La cuenta que es pasada como parametro se queda con saldo 0 y numerocuenta -1. Indicando que ya no útil
        $cuentaA->unir($cuentaB)
    bancarrota(): Asigna el saldo a cero
    mostrar: muestra un div con la información en varios span. Utiliza clases css por si luego le quieres dar estilo
Páginas:
Crea una página con tres cuentas:
    Milloneti, saldo 1000000
    Agapito, saldo 30345
    Pobretón, saldo -10000
Secuencia de acciones:
    Haz que el Milloneti tenga 100 retiradas de 1000 euros
    Haz que Agapito tenga un ingreso de 1200 euros
    Muestra el saldo de las 3 cuentas. Solo el saldo.
    Pobretón ha hackeado el banco y ha conseguido unir la cuenta del Milloneti a la suya.
    Agapito es buena persona y decide transferir la mitad de su salario a Milloneti para que rehaga su vida.
    Muestra el detalle (método mostrar) de las 3 cuentas.
    */

    class CuentaBancaria{
        public $numeroCuenta;
        public $nombre;
        public $saldo;
        public static $prefijo=1000001;

        public function __construct(String $nombre="Anónimo",float $saldo=0){
            self::$prefijo+=1; //con cada cuenta se aumenta el prefijo partiendo de la anterior, por eso no hace falta un setters para este atributo
            $this->numeroCuenta=self::$prefijo;
            $this->nombre=$nombre;
            $this->saldo=$saldo;
        }

        //setters y getters
        public function getNumeroCuenta(){
            return $this->numeroCuenta;
        }

        public function setNombre(String $nombre){
            $this->nombre = $nombre;
        }

        public function getNombre():string{
            // return "El titular de la cuenta es: $this->nombre <br>";
            return $this->nombre;
        }

        public function setSaldo(float $saldo){
            $this->saldo = $saldo;
        }

        public function getSaldo():float{
            return $this->saldo;
            // return "El saldo de la cuenta es: $this->saldo<br>";
        }

        //Métodos específicos

        public function ingresar($cantidad){
            $this->saldo+=$cantidad;
        }

        public function retirar($cantidad){
            $this->saldo-=$cantidad;
        }

        public function transferirA($cuenta, $cantidad){
            $this->saldo-=$cantidad;
            $cuenta->ingresar($cantidad); //tiene que recibir un objeto CuentaBancaria para poder usar el método ingresar     

            return "Se han transferido $cantidad € a la cuenta $cuenta->numeroCuenta <br>. El saldo actual de su cuenta es de: $this->saldo. <br>El de la otra cuenta es: $cuenta->saldo";
        }

        public function unionCon($cuenta){
            $this->saldo += $cuenta->saldo; //el saldo resultante es el del número de cuenta indicado, sumado al que se tenga en la cuenta
            $cuenta->saldo = 0;
            $cuenta->numeroCuenta = -1; //al hacer una unión  se elimina la cuenta indicada

            return "<br>Se ha realizado un traspaso del saldo de la cuenta indicada ($cuenta->numeroCuenta). Su saldo ahora es de: $this->saldo <br>";
        }

        public function bancarrota(){
            $this->saldo=0;
        }

        public function mostrar(){
            return "Nombre: ".$this->nombre." | Nº Cuenta: ".$this->numeroCuenta." | Saldo: ".$this->saldo."<hr>";
        }
    }
?>