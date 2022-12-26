<?php
    /* Se usan las siguientes funciones dentro de este ejercicio: array_walk, array_map, array_filter y array_reduce.

    Enunciado del ejercicio.
    1 Jorge (Profe)
    Funciones: array_walk, array_map, array_filter, array_reduce
    
    $personas = [
        ["Jorge", 1],
        ["Bea", 0],
        ["Paco", 1],
        ["Amparo", 0],
    ];
    
    Utiliza alguna de las funciones para generar un array de cadenas indicando el nombre de la persona y cómo tratarle con formalidad. Si el valor entero detrás del nombre es un 1 Hay que poner "Señor <nombre>", si es 0 hay que poner "Señora <nombre>"
    
    $resultado = ["Señor Jorge", "Señora Bea", "Señor Paco", "Señora Amparo"];
    
    --
    
    $comida = [
         0 => ["Banana", 3, 56],
    1 => ["Chuleta", 1, 256]
    2 => ["Pan", 1, 90]
        ]
        
    Utiliza la función map_reduce para calcular la cantidad de calorías de la comida anterior.
    
    --
    
    Con el array de personas anterior, utiliza el array_filter para sacar un listado de Hombre y otro listado de mujeres.*/
    
    $personas = [
        ["Jorge", 1],
        ["Bea", 0],
        ["Paco", 1],
        ["Amparo", 0],
    ];

    function saludar($valor){
        if($valor[1]==0){
            echo "Sra. ".$valor[0]."\n";
        }else echo "Sr " .$valor[0]."\n";
    }

    /* Otra versión:
    function saludo ($personas) {
        $tratamiento=0;
        $tratamiento=$personas[1]?"Señor":"Señora";
        return $tratamiento." ".$personas[0];

        array_walk($array, function($item, $clave) {
        echo ($item[1]==0?"Señora":"Señor")." ".$item[0];
        });
    }*/

    $resultado = array_map("saludar", $personas);

    //segundo apartado

    $comida = [
        0 => ["Banana", 3, 56],
        1 => ["Chuleta", 1, 256],
        2 => ["Pan", 1, 90]
    ];

    function calcularCalorias($cont, $comida){
        $cont += ($comida[1]*$comida[2]);
        return $cont;
    }

    $caloriasTotal = array_reduce($comida, "calcularCalorias");
    print($caloriasTotal);


    //tercer apartado

    function listaHombres($personas){
        return ($personas[1] == 1);
    }

    function listaMujeres($personas){
        return ($personas[1] == 0);
    }

    $listadoHombres = array_filter($personas, "listaHombres");
    $listadoMujeres = array_filter($personas, "listaMujeres");


    print_r($listadoHombres);
    print_r($listadoMujeres);

    //puede mejorarse para sacar solo el elemento y no el array completo.
?>