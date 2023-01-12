<?php

    //revisar el autoload (funciona con los require)
    // spl_autoload_register(function ($class) {
    //     $classPath = "./clases/";
    //     require("$classPath${$class}");
    // });

    require("./clases/IPlataformaPago.php");
    require("./clases/BancoMalvado.php");
    require("./clases/BitCoinConan.php");
    require("./clases/BancoMaloMalisimo.php");


    function realizarTransaccion(IPlataformaPago $pepe, string $cuenta, int $cantidad){
        $pepe->estableceConexion();
        $pepe->compruebaSeguridad();
        $pepe->pagar($cuenta, $cantidad);

    }

    $pago1 = new BancoMalvado();
    $pago2 = new BancoMaloMalisimo();
    $pago3 = new BitCoinConan();

    $pagos = [$pago1,$pago2,$pago3];

    $pepe = array_rand($pagos, 1);

    realizarTransaccion($pagos[$pepe],"1212YY", 40);
?>