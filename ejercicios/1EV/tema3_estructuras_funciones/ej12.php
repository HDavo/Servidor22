<?php
    //Crea una función que reciba un array con información de un usuario 
    //y escriba un formulario relleno. En este caso solo utiliza campos de texto o enteros
    //NOTA: Utiliza las funciones array_map o array_walk

    //<form id="datos personales" action="post">
    //<input name="nombre" value="Jorge Dueñas Lerín"></input>
    //... etc.
    //</form>
    
    $datos = [
        "nombre" => "Pepe Perez",
        "direccion" => "Calle Falsa, 123",
        "telefono" => "686761321",
        "edad" => 24
    ];

    function formulario($datos){
        echo '<form action="post">';
        array_walk($datos, function($value, $key){
            $tipo=(is_string($value))?"text":"number"; //dos tipos de input posibles
            echo "<label for='$key'>".ucfirst($key).": <input type='$tipo'id='$tipo'name='$key' value='$value'></input></label><br>"; //valores sacados de array_walk para crear un formulario según el tipo de dato.
        });
        echo '</form>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <div>
        <h1>Ejercicio generación de formulario a partir de un array.</h1>
        <div>
            <?php formulario($datos); ?>
        </div>
    </div>
</body>
</html>