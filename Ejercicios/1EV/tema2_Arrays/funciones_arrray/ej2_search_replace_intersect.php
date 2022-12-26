<?php
   /* 2 Funciones:  array_intersect, array_search y array_replace.
    Enunciado: Designa dos arrays con varios números. Algunos de ellos deberán coincidir entre ambas arrays. A continuación:
        Crea un tercer array que contenga los números en común de los primeros dos. Habrá posiciones nulas.
        Crea un cuarto array con las posiciones que le falten al anterior y un número asignado a cada una, y júntalo con el anterior.
        Buca el índice de un valor en el array final (por ejemplo el del valor 13)
        Finalmente, imprime todos los arrays que has generado para ver los cambios. */


        $primerArray = [12,21,8,24,42,11,2,23,6,22];

        $segundoArray = [34,32,2,8,42,45,10,20,11,65];

        //intersect devuelve los valores comunes de los elementos (arrays) pasados, con las posiciones que tienen en el que mandamos como primer elemento
        echo "Funcionamiento de intersect: ";
        $comunes = array_intersect($primerArray, $segundoArray);
        print_r($comunes);
        echo "<br>";

        //reemplazo en el caso de que estén en las mismas posiciones, en caso contrario añade en las posiciones vacías
        echo "Funcionamiento de replace: ";
       $cuartoArray = [0 => 75, 1 => 13, 3 => 54, 7 => 31];
       $otros = array_replace($cuartoArray, $comunes);
       print_r($otros);
       echo "<br>";
       //mirar el uso de array_diff -> Compares array against one or more other arrays and returns the values in array that are not present in any of the other arrays.

       //search -> devuelve el indice en donde se encuentra el valor que se está buscando

       echo "Funcionamiento de search: ";
       $busqueda = array_search(2, $otros);
       print_r($busqueda);
       
?>