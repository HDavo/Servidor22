<?php

    //Crea una función que genere un array asociativo que contenga información de los parámetros. 
    //La función irá descubriendo los tipos

    function tipos(... $parametros){
        $array1 = []; //dentro de este array se guardan los resultados de recorrer del array enviado

        foreach ($parametros as $value){ //este foeach recorre el array y devuelve el tipo de variable de cada una de las posiciones
            $array1[gettype($value)] +=1;
        }
        return $array1;
    }

    $resultado = tipos(21, "p", true, [1,3,4,5], "Pepe");
    print_r($resultado);

?>