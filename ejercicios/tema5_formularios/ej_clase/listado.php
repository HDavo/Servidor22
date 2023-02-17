<?php
    //se extraen los datos del fichero creado y se asignan a esa variable
    $datos = file_get_contents(
        "temazos.csv"
    );
    
    $lineas = explode("\n", $datos);
    array_pop($lineas); //extrae el último elemento del array que se indica.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de canciones</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Canción</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($lineas as $linea){
                        echo '<tr>';
                        $valor = explode(";", $linea);
                        echo '<td>'.$valor[0].'</td>';
                        echo '<td>'.$valor[1].':'.$valor[2].'</td>';
                    }
                    echo '</tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>