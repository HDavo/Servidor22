<?php
    //Crea una página web que genere 3 números aleatorios "mt_rand()", 
    //con sentencias condicionales los asigna a tres variables: mayor, mediano y pequeño. 
    //Después los mostrará en h1, h2 y h3 respectivamente.

    $pepe = [];


    const LIMITE = 5;
    $menor = $pepe[0];
    $mayor = $pepe[0];
    $medio = $pepe[0];
    //se asigna el valor inicial para poder comparar a partir este valor 

    for ($i=0; $i < LIMITE; $i++) { 
        $pepe[$i] = mt_rand(0,10);
        if ($menor >= $pepe[$i]) {
            $menor = $pepe[$i];
        }elseif ($mayor <= $pepe[$i]) {
            $mayor = $pepe[$i];
        }elseif($menor < $pepe[$i] && $pepe[$i] < $mayor){
            $medio = $pepe[$i];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rand</title>
</head>
<body>
    <div>
        <h1><?php echo "Soy el mayor  ".$mayor?></h1>
        <h2><?php echo "Soy el mediano  ".$medio?></h2>
        <h3><?php echo "Soy el pequeño  ".$menor?></h3>
    </div>
</body>
</html>