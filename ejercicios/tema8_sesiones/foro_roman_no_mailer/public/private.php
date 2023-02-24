<?php
    require('../src/init.php');

    if(!isset($_SESSION['nombre'])){
        header("Location: login.php");
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área privada</title>
</head>
<body>
    <h1>Privada, hola <?= $username?></h1> 
</body>
</html>