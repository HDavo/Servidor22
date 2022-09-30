<?php
    //ejemplo de uso de switch dentro de php
    if($_POST) {
        $boton=$_POST['bntValor']; //en esta línea se recibe el valor con ese nombre

        switch($boton) {
            case 1:
                echo "Se ha presionado el botón 1";
                break;
            case 2:
                echo "Se ha presionado el botón 2";
                break;
            case 3:
                echo "Se ha presionado el botón 3";
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
        <input type="button" name="btnValor" value="1">
        <br>
        <input type="button" name="btnValor" value="2">
        <br>
        <input type="button" name="btnValor" value="3">
        <!-- si dentro del input se ponen nombres distintos se manda la información una vez por cada botón, por ello lo mejor es ponerles el mismo nombre. -->
        <!-- Cuando tienen el mismo nombre se hace que el botón tenga distintos valores, y estos valores serán los evaluados en el envío de información al php -->
        <br>
    </form>
</body>
</html>