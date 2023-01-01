<?php 
    require('./CuentaBancaria.php');

    $cuenta1 = new CuentaBancaria();
    $cuenta2 = new CuentaBancaria("Pepe Perez Palencia",1221);

    $cuenta3 = new CuentaBancaria("Juan Dominguez", 2000);
    // echo $pepe;

    
    

    print $cuenta1->impresion();
    print $cuenta2->impresion();
    print $cuenta3->impresion();

    $cuenta2->ingreso(600);

    $cuenta2->retirada(200);

    $cuenta3->transferencia(2500, $cuenta2);

    
?>
