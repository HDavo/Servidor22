<?php
    //esta parte será la receptora de la información contenida dentro del formulario html
    //Método POST
    if($_POST){
        $nombre=$_POST['txtNombre'];

        echo "Hola " .$nombre;
    }
    //Con este if se hace que si existe información obtenida mediante el método post se muestre en pantalla la información obtenida.
    

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
    
    <!-- este formulario se envia a la parte de php, mediante los inputs puesto -->
    <form action="ejercicio2.php" method="post">
        Nombre: 
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="button" value="Enviar">

    </form>
    Hola Mundo
</body>
</html>