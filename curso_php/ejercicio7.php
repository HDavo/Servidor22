<?php
//ejercicio de dedicado al uso de constantes dentro de php
//misma lógica que dentro de JAVA

$edad=32; //declaración normal de variables

echo $edad."<br>"; //esta impresión mostraria el valor de 32

$edad = 40; //al no ser una variable aquí se produce un cambio del valor de la variable

echo $edad."<br>"; //esta impresión mostrará el valor modificado, en este caso 40


//uso de constante
define("Nombre", "Oscar"); //forma de definir una constante de string

echo Nombre; //las constantes no llevan el signo del dolar delante

//probar si a la hora de imprimir se muestra de esta forma o es necesario poner la constante en mayúscula
?>