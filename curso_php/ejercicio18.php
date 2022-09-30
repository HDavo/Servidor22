<?php
    //ejemplo de uso de funciones matemáticas ya incorporados dentro de php
    //la función rand incluye los números que marcan el límite
    //genera números enteros aleatorios
    $numeroAleatorio = rand(1,10);

    $numeroAbsoluto = abs(rand(-10,-1));

    //forma de generar numeros decimales aleatorios entre dos numeros
    function random_float ($min,$max)    {
        return ($min+lcg_value()*(abs($max - &min)));
        //lcg_value devuelve numeros aleatorios entre 0 y 1.
        /* Lo que hace esta función es usar ese número decimal para sumarlo al minimo y después lo multiplica por la diferencia absoluta de los límites, dando lugar un número aleatorio decimal al sumarle lo obtenido por la función lcg_value*/
    }

    // function redondeo ($numero, $decimales= 0,){}

    echo $numeroAleatorio;
    echo $numeroAbsoluto;
    echo sqrt($numeroAleatorio);
    echo round(random_float(12,32));
    random_float(12,32);

?>