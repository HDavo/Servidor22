<?php
    require('config.php');
    require('DWESBaseDatos.php');

    $db = DWESBaseDatos::obtenerInstancia();
    $db->inicializa(
        $CONFIG['db_name'],
        $CONFIG['db_user'],
        $CONFIG['db_passwd']
    ); //ya define el modo de fetch 

    date_default_timezone_set("Europe/Madrid");

    $navegador = $_SERVER['HTTP_USER_AGENT'];
    $hora = $_SERVER['REQUEST_TIME'];

    $db->ejecuta(
        "INSERT INTO logs (navegador, tiempo) VALUES (?,?);",
        $navegador,$hora
    );

    // $db->ejecuta(
    //     "SELECT * FROM logs;"
    // );
    // $consulta = $db->obtenDatos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?= "Hola Mundo"?>
    <br>
    <a href="logs.php">Listado log</a>
    <?php print_r($consulta); ?>
</body>
</html>