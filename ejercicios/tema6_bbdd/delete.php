<?php

    require('accesoBDBasico.php');

    $delete = $dbh->prepare("DELETE FROM Ciclistas WHERE id = :id");
    $id=8;

    if($delete->execute(array(':id' => $id))){
        echo "Borrado realizado de manera correcta";
    }else{
        echo "Borrado no realizado";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insertarTabla.php">Insertar</a>
    <a href="insertar.php">Insertar a mano</a>
    <a href="update.php">Update a mano</a>
    <a href="delete.php">Delete a mano</a>
    <a href="tablaCiclistas.php">Volver a la tabla</a>
</body>
</html>