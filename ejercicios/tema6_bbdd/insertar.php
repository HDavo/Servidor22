<?php
    require('./accesoBD.php');

    $stmt = $dbh->prepare("INSERT INTO Ciclistas (id, nombre, num_trofeos) VALUES (:id,:nombre,:num_trofeos)");

    //Aqui se meten los datos
    $id = 8;
    $nombre = 'Pepe';
    $num_trofeos = 5;

    //LOs valores que van dentro de la sentencia 
    if($stmt->execute([
        ':id'=>$id,
        ':nombre'=>$nombre,
        ':num_trofeos'=>$num_trofeos
    ])) {
        echo 'Insert realizado de manera correcta';
    }else{
        echo 'Fallo en el Insert';
    }

    //Como se ha terminado, se cierra

    $resultado = null;
    $dbh = null;
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