<?php
    require('./controladoraCuenta.php');

    $cliente1 = new CuentaBancaria("Milloneti", 1000000);
    
    $cliente2 = new CuentaBancaria("Agapito", 30345);

    $cliente3 = new CuentaBancaria("Pobretón",-10000);

    print $cliente1->darSaldo(); //saldo antes de hacer las retiradas de dinero
    for ($i=0; $i < 100; $i++) {  //para hacer 100 retiradas 
        $cliente1->retirar(1000);
    }
    print $cliente1->darSaldo(); //saldo después de hacer las retiradas
    $cliente2->ingresar(1200);


    $cliente1->darSaldo();
    $cliente2->darSaldo();
    $cliente3->darSaldo();

    $cliente1->unirCon($cliente3); 

    print $cliente2->transferenciaA($cliente1, ($cliente1->saldo/2));

    print $cliente1->mostrar();

    print $cliente2->mostrar();

    print $cliente3->mostrar();
    





?>