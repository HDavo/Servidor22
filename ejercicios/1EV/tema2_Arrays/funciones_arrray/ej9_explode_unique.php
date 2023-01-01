<?php
    /*
    a) Dado un texto o párrafo concreto, verificar si existe una palabra pasada por formulario en el parrafo y mostrar alguna frase del párrafo que la contenga. */

    $parrafo = <<< EOF
    En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo científico acerca de los fotones de luz y sus propiedades Bose describe ciertas reglas para determinar si dos fotones deberían considerarse idénticos o diferentes Esta se llama la condensado' de Bose - Einstein Einstein aplica estas reglas a los átomos preguntándose cómo se comportarían los átomos de un gas si se les aplicasen estas reglas."
    EOF;

    $coincidencia = strpos($parrafo, " Bose");
    if($coincidencia){
        print_r(explode("Bose", $parrafo)[0]." Bose");
    }else{
        echo "Término no encontrado";
    }
    echo "<br>";


    /*
    b) Dada una cadena o frase, eliminar los valores duplicados que puedan existir en la cadena y mostrar la cadena original y sin duplicados. */

    $frase="Mateo, Marcos, Lucas, Pedro, Max, Philip, Lucer, Robert, Maximiliano, Roberto, Pedro, Wenceslao, Teodoro, Mateo, Felipe, Petra, Lucer, Jose, Armando, Simón, Nicéforo, Jose, Felipe";

    $conversion = explode(", ", $frase); //1- caracter para realizar la separación 2- donde se debe aplicar

    $noDuplicados = array_unique($conversion);

    echo "Cadena original: <br>";
    print_r($conversion);

    echo "<br>";
    echo "Cadena sin duplicados <br>";
    print_r($noDuplicados);
?>