<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cadenas</title>
</head>
<body>
    <div>
        <form action="ejercicio_cadenas.php" method="get">
            Introduce tu nombre <input type="text" name="nombre" placeholder="Ej. Pepe" value="<?=$nombre?>">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div>
        <p>Número de vocales: </p> <br>
        <p>Número de consonantes: </p> <br>
        <p>¿Palíndromo?</p> 
    </div>
    
</body>
</html>