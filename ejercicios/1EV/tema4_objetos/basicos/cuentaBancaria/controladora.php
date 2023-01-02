<?php
    require('./clases/CuentaBancaria.php');

    $c1 = new CuentaBancaria("Pepe Perez", 25000);
    $c2 = new CuentaBancaria("Manolo Sanchez", 300);
    $c3 = new CuentaBancaria("Paco Martinez",100000);


    // echo $c1->getSaldo();
    // echo $c2->getSaldo();
    // echo $c3->getSaldo();

    // echo $c1->getNombre();
    // echo $c2->getNombre();
    // echo $c3->getNombre();

    echo $c3->transferirA($c2, 20000);
    // echo $c2->getSaldo();
    echo $c2->unionCon($c1);
    // echo $c3->getSaldo();
    // echo $c3->ingresar(10000);
    // echo $c3->getSaldo();

    // print $c1->mostrar();
    echo $c2->mostrar();
    echo $c3->mostrar();
?>