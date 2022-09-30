<?php
    $frutas=array("fresa", "naranja","pera");
    //declaracion con indices por defecto

    $frutas2=array("f"=>"fresa","n"=>"manzana","p"=>"pera");
    //declaracion de un array con los indices personalizados
    //siempre para el cambio de indices es necesario seguir la estructura de arriba y usar => antes del contenido

    print_r($frutas);
    print_r($frutas2);

    //ejemplo de mostrar el contenido de un array con indice definido por el usuario
    echo $frutas2["m"];

    //continuar desde el minuto 2:13:00
?>