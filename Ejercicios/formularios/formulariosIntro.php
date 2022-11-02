<?php
    print_r($_SERVER);
    echo "<hr>";
    print_r($_GET);
    echo "<hr>";
    print_r($_POST);
    echo "<hr>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/index.php" method="post">
        Nombre: <input type="text" name="=nombre"><br>
        Sexo:<br>
        Hombre<input type="radio" name="sexo" value="H">
        Mujer<input type="radio" name="sexo" value="M">
        Otro<input type="radio" name="sexo" value="O">
        <br>
        Color favorito: <input type="color" name="colorFavorito">
        <br>
        Número<input type="number" name="numeros">
        <br>
        <textarea name="" id="" cols="10" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
   
</body>
</html>