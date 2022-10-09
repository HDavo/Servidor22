<!-- Funciones: array_intersect, array_search y array_replace.

Enunciado: Designa dos arrays con varios números. Algunos de ellos deberán coincidir entre ambas arrays.

A continuación:

    Crea un tercer array que contenga los números en común de los primeros dos. Habrá posiciones nulas.
    Crea un cuarto array con las posiciones que le falten al anterior y un número asignado a cada una, y júntalo con el anterior.
    Busca el índice de un valor en el array final (por ejemplo el del valor 13)
    Finalmente, imprime todos los arrays que has generado para ver los cambios. -->

<?php 
    $pepe = [1,2,4,5,0,8];

    $manolo = [0,2,3,7,8];

    // Crea un tercer array que contenga los números en común de los primeros dos. Habrá posiciones nulas.
    $comunes = array_intersect($pepe,$manolo);

    echo "Estos son los elementos comunes de los arrays <br>";
    print_r($comunes);

    // Crea un cuarto array con las posiciones que le falten al anterior y un número asignado a cada una, y júntalo con el anterior.
    $ausentes = array_diff($pepe,$manolo);
    // print_r(array_diff_key($pepe,$manolo));


    echo "<br>";
    print_r($ausentes);


    $final = array_replace($ausentes,$comunes);
    // Busca el índice de un valor en el array final (por ejemplo el del valor 13)
    //search devuelve el indice en donde se encuentra el valor que se está buscando
    $busqueda = array_search(8,$final);
    echo "<br> El valor se encuentra en la posición: ";
    print_r($busqueda);
    // echo "<br>";
    // print_r($busqueda);









?>