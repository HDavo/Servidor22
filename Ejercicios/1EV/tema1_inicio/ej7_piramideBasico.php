<?php
    $num=5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    <link href="estilos_ejercicio4.css" type="text/css" rel="stylesheet">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php for ($fila=1; $fila<=$num; $fila++) { ?>
        <?php for ($i=1; $i<=$num-$fila; $i++) { ?>
            <?='&nbsp;'?>
        <?php } ?>
        
        <?php for ($j=1; $j<=2*$fila-1; $j++) { ?>
            <?="*"?>
        <?php } ?>
        <br>
    <?php } ?>
 
</body>
</html>