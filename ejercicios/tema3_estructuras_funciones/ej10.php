<?php

    //Crea una función que genera un array aleatorio con parámetros variables 
    //Por defecto generará 10 valores entre 0 y 10 Puedes especificar el número de valores como primer parámetro, 
    //Puedes especificar el valor máximo como segundo parámetro o Puedes especificar número de valores, máximo y mínimo
    //aleatorio();  [n,n,n,n,n,n,n,n,n,n]
    //aleatorio(5) // [n,n,n,n,n]
    //aleatorio(5,50)
    //aleatorio(5,50,-50)

    function generador($valor=1, $min=0, $max=12){
        // $valor;
        $cosa = [];

        for ($i=0; $i < $valor; $i++) { 
            $cosa[$i] = mt_rand($min,$max);
        }
        print_r($cosa);
        echo "<br>";
    }

    generador(4,1,12);
    generador(9,23,45);
    generador(8,21,42);

    
?>
