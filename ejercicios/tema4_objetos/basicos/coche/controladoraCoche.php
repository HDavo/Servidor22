<?php
    require('./clases/Coche.php');
    require('./clases/CocheConRemolque.php');
    require('./clases/CocheGrua.php');
    

    $cocheVacio = new Coche();
    $coche1 = new Coche("1000-FKV","BMW",30);
    $cocheR1 = new CocheConRemolque("1001-GFW","Renault",30, 200);
    $coche2 = new Coche("1002-JFV","Porsche",40);
    $cocheG1 = new CocheGrua("1003-CMS","Ford",20);

    $cocheG1->cargar($coche2);
    $cocheR2 = new CocheConRemolque("1005-JFV", "Nissan",22, 350);

    $cocheG2 = new CocheGrua("1007-FRY","Kia",30);

    $cocheG2->cargar($cocheR2);

    $cocheG3 = new CocheGrua("2412-GFK","Toyota",45);
    $cocheG3->cargar($cocheG2); //en este coche grúa se pone otro coche grúa que ya está cargado con otro coche
    // print $coche1->imprimir();
    // print $cocheR2->imprimir(); 

    //todos los objetos de tipo Coche se meten dentro de un array para poder imprimirlos
    $coches = array($coche1,$cocheR1,$cocheG1,$cocheG2,$cocheG3);


    // print_r($coches);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Objetos: coches</title>
    </head>
    <body>
        <div id="general">
        <h1>COCHES</h1>
        <?php array_walk($coches, function($value, $key) { ?>
                <div class='info'><h2>COCHE: <?=$key+1?></h2><?=$value->Imprimir()?></div>
        <?php }) ?>

        </div>
    </body>
</html>