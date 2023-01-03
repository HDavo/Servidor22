<?php

    require('./clases/Usuario.php');
    require('./clases/UsuarioAdmin.php');
    require('./clases/UsuarioPremium.php');

    $us1 = new Usuario("Pepe","Perez Perez", "Badminton");
    $us2 = new UsuarioAdmin("Manolo", "Delgado Perez", "Padel");
    $us3 = new UsuarioPremium("Paco","Parroquia Perez", "Tenis");

    $us1->ponerResultado('empate');
    $us1->ponerResultado('derrota');
    $us1->ponerResultado('victoria');
    $us1->ponerResultado('empate');
    $us1->ponerResultado('victoria');
    $us1->ponerResultado('victoria');
    $us1->ponerResultado('victoria');
    $us1->ponerResultado('victoria');
    $us1->ponerResultado('victoria');
    $us1->ponerResultado('victoria');

    print ($us1->imprimir());

    $us2->ponerResultado('empate');
    $us2->ponerResultado('derrota');
    $us2->ponerResultado('victoria');
    $us2->ponerResultado('empate');
    $us2->ponerResultado('victoria');
    $us2->ponerResultado('victoria');
    $us2->ponerResultado('victoria');
    $us2->ponerResultado('victoria');
    $us2->ponerResultado('victoria');
    $us2->ponerResultado('victoria');
    $us2->ponerResultado('derrota');
    $us2->ponerResultado('derrota');
    $us2->ponerResultado('derrota');
    $us2->ponerResultado('derrota');
    $us2->ponerResultado('derrota');
    $us2->ponerResultado('derrota');

    print $us2->imprimir();

    $us3->ponerResultado('empate');
    $us3->ponerResultado('derrota');
    $us3->ponerResultado('victoria');
    $us3->ponerResultado('empate');
    $us3->ponerResultado('derrota');
    $us3->ponerResultado('derrota');
    $us3->ponerResultado('derrota');
    $us3->ponerResultado('victoria');
    $us3->ponerResultado('victoria');
    $us3->ponerResultado('victoria');
    
    print $us3->imprimir();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Usuarios</title>
</head>
<body>
    
</body>
</html>