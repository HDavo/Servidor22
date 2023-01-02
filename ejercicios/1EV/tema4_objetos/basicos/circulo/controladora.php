<?php
    require("Circulo.php");

    $pepe = new Circulo();
    $pepe->setRadio(12);
    echo $pepe->getRadio()."<br>";
    echo $pepe->getArea()."<br>";

    $pepe2 = new Circulo();
    $pepe2->setRadio(5);

    // $pepe2 = new Circulo(5);
    // echo $pepe->getRadio();
    // echo $pepe->getArea();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Si tienes radio <?=$pepe2->getRadio()?></h1>
        <p>Tu área es: <?=$pepe2->getArea()?></p>
    </body>
    </html>
