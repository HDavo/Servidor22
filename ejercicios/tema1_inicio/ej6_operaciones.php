<?php
    $numA=7;
    $numB=5;

    $resultadoA=$numA+$numB;
    $resultadoB=$numA-$numB;
    $resultadoC=$numA*$numB;
    $resultadoD=$numA/$numB;
    $resultadoE=$numA%$numB;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?= print_r(get_defined_vars());?>
</body>
</html>