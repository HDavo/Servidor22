<?php
    $tablero = [];
    $n;
    $m;

    function inicializaSopaLetras(&$tablero, $n, $m){ //n y m indican el número de casillas que le vamos a poner al tablero al imprimirlo
        $letras = "abcdefghijklmnnopqrstuvwxyz";
        $letras = strtoupper($letras);
        for ($i=0; $i < $n; $i++) { 
            for ($j=0; $j < $m; $j++) { 
                $random = random_int(0, 26);
                $tablero[$i][$j] = substr($letras, $random, 1); //dentro de tablero se van poniendo las distintas letras contenidas dentro de la variable $letras
            }
        }
    }

    //se pone el tablero
    inicializaSopaLetras($tablero,8,8);

    //apartado 2
    function pintaTablero($tablero){ //se pinta el tablero usando el contenido de la variable tablero, generada previamente
        echo "<table>";
        foreach ($tablero as $fila) {
            echo "<tr>";
            foreach ($fila as $valor){
                echo "<td>".$valor."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    //apartado 3
    /* En las diferentes funciones de colocar las palabras
    de distinta manera se pone & para sobreescribir y poner un nuevo tablero,dependiendo del modo de colocación de la palabra */

    function colocaPalabraHorizontal(&$tablero, $palabra){
        //se mira la longitud de la palabra recibida
        $longitudPalabra = strlen($palabra);

        //se comprueba que la palabra entra dentro del tablero, en este caso, usando el ancho al ser una palabra en horizontal
        //Estos serán los límites del tablero
        $maximoX = count($tablero) - $longitudPalabra;
        $maximoY = count($tablero[0]); //se hace un count porque siempre tendremos una primera fila, sin importar el tamaño del tablero

        //para determinar la posición en la que se pondrá la palabra
        $inicioX = rand(0, $maximoX);
        $inicioY = rand(0, $maximoY -1); //el -1 evita que la palabra se salga por este lado

        //esto inserta la palabra dentro del tablero
        for ($i=0; $i < $longitudPalabra; $i++) { 
            $tablero[$inicioY][$inicioX + $i] = substr($palabra, $i, 1);
        }
    }
    
    function colocaPalabraVertical(&$tablero, $palabra){
        $longitudPalabra = strlen($palabra);

        //limites
        $maximoX = count($tablero);
        $maximoY = count($tablero[0]) - $longitudPalabra;


        //posiciones iniciales para introducir la palabra
        $inicialX = rand(0, $maximoX - 1); //el -1 evita que la palabra se salga por este lado
        $inicialY = rand(0, $maximoY);

        //inserción de la palabra en el tablero

        for ($i=0; $i < $longitudPalabra; $i++) { 
            $tablero[$inicialY + $i][$inicialX] = substr($palabra, $i, 1); //se van insertando las letras una a una dentro del tablero
        }
    }

    function colocaPalabraHorizontalAlreves(&$tablero, $palabra){
        $longitudPalabra = strlen($palabra);

        $maximoX = count($tablero) - $longitudPalabra;
        $maximoY = count($tablero[0]);


        $inicioX = rand(0, $maximoX);
        $inicioY = rand(0, $maximoY - 1);

        for ($i=0; $i < $longitudPalabra; $i++) { 
            $tablero[$inicioY][$inicioX + $i] = substr($palabra, $longitudPalabra-$i-1, 1); //las letras se van insertando desde la última hasta la primera, sin poner -1 no lo hace bien
        }
    }

    function colocaPalabraVerticalAlreves(&$tablero, $palabra){
        $longitudPalabra = strlen($palabra);

        $maximoX = count($tablero);
        $maximoY = count($tablero[0]) - $longitudPalabra;

        $inicioX = rand(0, $maximoX -1);
        $inicioY = rand(0, $maximoY);

        for ($i=0; $i < $longitudPalabra; $i++) { 
            $tablero[$inicioY + $i][$inicioX] = substr($palabra, $longitudPalabra-$i-1, 1);
        }
    }

    //Apartado 7

    function colocaPalabra(&$tablero, $palabra){
        $aleatorio = random_int(1,4);

        switch ($aleatorio) {
            case 1: colocaPalabraHorizontal($tablero, $palabra); break;
            case 2: colocaPalabraVertical($tablero, $palabra); break;
            case 3: colocaPalabraHorizontalAlreves($tablero, $palabra); break;
            case 4: colocaPalabraVerticalAlreves($tablero, $palabra); break;
            
            default: echo "error"; break;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopa de letras R</title>
    <style>
        *{box-sizing: border-box;}
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding: 5px 7.5px;
        }
    </style>
</head>
<body>
    <?php
        colocaPalabra($tablero, "ARBOL"); //se pasa lo que queremos que pinte, con esta función se elige de forma aleatoria la forma de pintar la palabra pasada dentro del paréntesis
        pintaTablero($tablero); //pinta lo mandado en la función anterior
    ?>
</body>
</html>