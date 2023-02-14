<?php
    require('./accesoBDBasico.php');

    $update = $dbh->prepare("UPDATE Ciclistas SET nombre = :nombre WHERE id = :id");

    $nombre = "Manolo";

    $id=8;
    if($update->execute([
        ':nombre' => $nombre,
        ':id'=>$id,
    ])) {
        echo "Actualización correcta de la tabla";
    }else{
        echo "No ha habido actualización de la tabla";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <a href="insertarTabla.php">Insertar</a>
    <a href="insertar.php">Insertar a mano</a>
    <a href="update.php">Update a mano</a>
    <a href="delete.php">Delete a mano</a>
    <a href="tablaCiclistas.php">Volver a la tabla</a>
</body>
</html>