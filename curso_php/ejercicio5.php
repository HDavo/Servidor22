<?php
    //. para concatenar Strings
    //¿a la hora de concatenar es necesario poner los espacios entre variables?
    if ($_POST) {
        $txtNombre=$_POST['txtNombre'];
        $txtApellido=$_POST['txtApellido'];

        echo "Hola " .$txtNombre.$txtApellido;
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
    Hola Mundo
    <!-- este formulario se envia a la parte de php, mediante los inputs puesto -->
    <form action="ejercicio2.php" method="post">
        Nombre: 
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="button" value="Enviar">

    </form>

</body>
</html>