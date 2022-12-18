<?php
    //uso de 3 variables
    $nombre = " Pepe";
    $r = 0;
    $error = false;
    //$_GET consigue la información de la cabecera
    print_r($_GET);
    if (isset($_GET['radio'])) {
        $r = $_GET['radio'];
        if ($r =="") {
            $r =0;
            $error = true;
        }
    }else {
        $r = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 T1</title>
</head>
<body>
    <h1>Bienvenido a la calculadora <?=$nombre?></h1>
    <div>
        <?php if ($error) {?>
            <h3>Debes introducir un número para que funcione</h3>
        <?php } ?>
        <form action="practica5.php" method="get">
            Radio: <input type="number" step="0.01" name="radio" id="" value="<?=$r?>"><br>
            <input type="submit" value="Calcular">
        </form>
    </div>
    <div>
        <p>Area: <?=$r*$r*M_PI?></p>
        <p>Longitud: <?=2*$r*M_PI?></p>
    </div>
</body>
</html>

<!-- DENTRO DE VALUE HAY QUE PONER LA VARIABLE QUE QUERAMOS GUARDAR DEL FORMULARIO PARA EVITAR PERDER INFORMACION -->
<!-- DENTRO DEL HTML NAME SE USA PARA EL SERVIDOR E ID DENTRO DEL CLIENTE DENTRO DE INPUT -->