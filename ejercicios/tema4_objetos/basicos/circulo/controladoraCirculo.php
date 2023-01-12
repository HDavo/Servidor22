<?php

    include("./clases/Circulo.php");

    $circulo1 = new Circulo();
    $circulo2 = new Circulo();

    $circulo1->setRadio(5);
    echo $circulo1->getRadio()."<br>";
    echo $circulo1->getArea()."<br>";

    $circulo2->setRadio(2);
    echo $circulo2->getRadio()."<br>";
    echo $circulo2->getArea()."<br>";
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
        <h1>Si tienes radio <?=$circulo1->getRadio()?></h1>
        <p>Tu área es: <?=$circulo1->getArea()?></p>
    </body>
    </html>
