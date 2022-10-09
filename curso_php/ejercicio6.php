<?php
    /* las variables dentro de php no tienen necesidad de tiparse,
    basta con que pongamos el $ delante del nombre y ya se considera variable
    sin importar el tipo de dato que se use para la variable definida. */

    $Edad=33; //entero

    $Nombre="Pepe"; //string

    $Altura=1.56; //float

    $Programador=null; //valor nulo

    /* Las comillas simples no permiten que dentro de su contenido se ponga una variable, es decir, no va a
    reconocer a la variable y solo escribirá el nombre de la variable y no su contenido como sucederia como en el caso
    de las comillas dobles.*/

    echo " El nombre es ".$Nombre." la edad es ".$Edad.", su altura es ".$Altura." y su puesto es ".$Programador . "<br";


    //formas de declarar strings
   /*  En el caso de que necesitemos usar comillas dentro de otras comillas, el tipo de las comillas de apertura debe ser diferente al de las comillas interiores o hacer uso de carácteres de escape con lo que podremos usar el mismo tipo de comillas.
   Tener en cuenta si se necesita usar variables dentro del string (comillas simples no compatibles con esto). */


  

?>
