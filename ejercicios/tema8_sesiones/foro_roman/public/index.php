<?php
    require("../src/init.php"); //esto en todas 

    $db->ejecuta("SELECT * FROM usuarios;"); //pdo y consulta
    $consulta = $db->obtenDatos(); //fetchall de la consulta dentro de la variable 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>INDEX: hola <?= $username?></h1> 
    <!-- <h1>lista usuarios, hola </h1> -->
    <a href="index.php">index</a>
    <a href="login.php">login</a>
    <a href="register.php">register</a>
    <a href="private1.php">private1</a>
    <a href="private2.php">private2</a>
    <a href="private3.php">private3</a>
    <a href="logout.php">logout</a>
    <hr>

    <?php  //datos recuperados de la bbd
        foreach ($consulta as $key => $usuario) {
            echo "<a href='detalle.php?user=".$usuario['nombre']."'><b>nombre: </b>".$usuario['nombre']."</a>";
            echo "<p><b>correo: </b>".$usuario['correo']."</p>";
            echo "<hr>";
        }
    ?>
</body>
</html>