<?php
    require('./Coche.php');
    require('./CocheConRemolque.php');
    require('./CocheGrua.php');
    
    $coche1 = new Coche("1000-FKV","bmw",30);
    $cocheR1 = new CocheConRemolque("1001-GFW","Renault",30, 200);
    $coche2 = new Coche("1002-JFV","Porsche",40);
    $cocheG1 = new CocheGrua("1003-CMS","Ford",20);
    $cocheR2 = new CocheConRemolque();

    print $coche1->imprimir();
    print $cocheR2->imprimir();


?>
