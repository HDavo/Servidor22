<?php
    $numVocales=0;
    $numConsonantes=0;
    $esPalindromo="";
    $comparacion="";

    if (isset($_GET['palabra'])) {
        $p = $_GET['palabra'];
        
        for ($i=0; $i<strlen($p); $i++) {
            if ($p[$i] == "a" || $p[$i] == "e" || $p[$i] == "i" || $p[$i] == "o" || $p[$i] == "u") {
                $numVocales++;
            } else {
                $numConsonantes++;
            }
        }
    
    } else {
        $p='';
    }

    function esPalindromo ($p) {
        $comparacion = "";
        for ($j=strlen($p)/2; $j>0 ;$j--) {
            $comparacion.=$p[$j];
        }
        if ($comparacion==substr($p, (strlen($p)/2))) {
            return 'Sí';
        } else return 'No';
    }

    if (esPalindromo($p)=='Sí') $mostrar = 'resumen';
    else $mostrar ='noResumen';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio cadenas</title>
    <link href="css/estilos_ejcadenas.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenedor">
        <div>
            <h1>¿Palíndromo?</h1>
            <form action="#" method="get">
                <p>Introduce una palabra:<br>
                    <input type="text" name="palabra" value="<?=$p?>"><br>
                    <input type="submit" value="Comprobar">
                </p>
            </form>
        </div>
        
        <div class="<?=$mostrar?>">
            <ul>
                <li>Número de vocales: <?=$numVocales?></li>
                <li>Número de consonantes: <?=$numConsonantes?></li>
                <li>¿Es palíndromo? <?=esPalindromo($p)?></li>
            </ul>
        </div>
    </div>
</body>
</html>