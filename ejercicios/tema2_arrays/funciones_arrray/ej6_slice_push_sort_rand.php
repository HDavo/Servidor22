<?php
    /*
    Crea un array con 20 números aleatorios. A continuación, ordénalo, quítale la primera mitad de los números y pónselos al final. Muestra todos los pasos por pantalla.
    Tienes que usar las siguientes funciones
    array_slice — Extract a slice of the array
    array_push — Push one or more elements onto the end of array
    sort — Sorts array in place by values in ascending order.4
    rand — Generate a random integer
    */

    for ($i=0; $i < 20; $i++) { 
        $aleatorios[$i] = rand(1,9);
    }
    echo "Array sin ordenar: ";
    echo "<br>";
    print_r($aleatorios);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    sort($aleatorios);
    echo "Array ordenado: ";
    echo "<br>";
    print_r($aleatorios);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $aleatorios2 = array_slice($aleatorios, 0, 10, true);

    for ($i=0; $i < count($aleatorios2); $i++) { 
        array_push($aleatorios, $aleatorios2[$i]);
    }
    
    $aleatorios = array_slice($aleatorios,10, count($aleatorios), true);
    echo "Array con slice: <br>";
    print_r($aleatorios);
?>