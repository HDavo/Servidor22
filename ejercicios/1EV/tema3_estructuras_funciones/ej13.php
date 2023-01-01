<?php
    /* Crea una función para escribir select de HTML, la función recibe un asociativo con el nombre y el value, también recibe el elemento seleccionado. como un entero (que representa su value). */

    $selecciones = [
        "Madrid" => 24,
        "Málaga" => 15,
        "Lugo" => 45,
    ];

    function generador (array $opciones, int $seleccion = -1) {
        echo '<select name="opciones">';

        function recorrido ($value, $key, $seleccion) {
            $elegida=($seleccion == $value)?'selected':'';
            echo "<option value='$value' $elegida>$key</option>";
        }
        array_walk($opciones, "recorrido", $seleccion);
        echo '</select>';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <div>
            <h2>Ejercicio 13, escritura de select</h2>
            <div class="resul">
                <?= generador($selecciones, 45); ?>
            </div>
    </div>
</body>
</html>