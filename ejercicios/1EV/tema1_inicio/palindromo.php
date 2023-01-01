<?php 
    $palabra = "";
    $numVocales = 0;
    $numConsonantes = 0;
    $esPalindromo = "";
    $comparacion = 0;

    if(isset($_GET['palabra'])){
        $palabra = $_GET['palabra'];

        for($i = 0; $i<strlen($palabra); $i++){
            if ($palabra[$i] == "a" || $palabra[$i] == "e" || $palabra[$i] == "i" || $palabra[$i] == "o" || $palabra[$i] == "u" ){
                $numVocales++;
            }else{
                $numConsonantes++;
            }
        }
    }else{
        $palabra = "";
    }

    function comprobarPalindromo ($p) {
        $comparacion = "";
        for ($j=strlen($p)/2; $j>0 ;$j--) {
            $comparacion.=$p[$j];
        }
        if ($comparacion==substr($p, (strlen($p)/2))) {
            return 'NO';
        } else return 'SI';
    }

    if (comprobarPalindromo($palabra)=='Sí') $mostrar = 'resumen';
    else $mostrar ='noResumen';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Palindromo</title>
    </head>
    <body>
        <div id="general">
            <div>
                <h1>Bienvenido al comprobador de palíndromos</h1>
                <form action="#" method="get">
                    <label for="introducir">Introduce una palabra:</label>
                    <input type="text" name="palabra" value="<?= $p ?>">
                    <br>
                    <input type="submit" value="Comprobar">
                </form>  
            </div>
            <div id="<?php $mostrar ?>">
                <ul>
                    <li>Palabra introducida: <?= $palabra ?></li>
                    <li>Número de vocales: <?= $numVocales ?></li>
                    <li>Número de consonantes: <?= $numConsonantes ?></li>
                    <li>¿Palíndromo? <?= comprobarPalindromo($palabra) ?></li>
                </ul>
            </div>
            
            
        </div>
        
    </body>
</html>
