<?php

    require('config.php');
    require('DWESBaseDatos.php');

    // $data=file_get_contents('Prueba.txt');
    // $lineas=explode("\n", $data);

    $db = DWESBaseDatos::obtenerInstancia();

    $db->inicializa(
        $CONFIG['db_name'],
        $CONFIG['db_user'],
        $CONFIG['db_passwd']
    );

    $db->ejecuta(
        "SELECT * FROM cosas"
    );

    $consulta = $db->obtenDatos();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Form Pocho</title>
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            /* font-weight:500; */
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        tr, td, th {
            padding:0.5%;
        }
        table {
            margin-bottom:2%;
            width:100%;
        }
        th {
            background-color: #007e98;
            color: #FFF;
        }

        a {
            text-decoration: none;
            padding:1.2%;
            background-color: #007e98;
            color: #FFF;
            border-radius:10px;
        }
        a:hover {
            background-color: rgba(255, 255, 255, 0);
            box-shadow: inset 0px 0px 0px 3px #007e98;
            color: #007e98;
        }
    </style>
</head>
<body>
    <!-- tabla -->
    <table>
        <!-- thead -->
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Año de construcción</th>
                <th>Estilo</th>
            </tr>
        </thead>

        <!-- tbody -->
        <tbody>
            <?php
                /* foreach ($lineas as $linea) {
                    echo "<tr>";
                        $celdas = explode(";", $linea);
                        array_pop($celdas);
                        foreach($celdas as $celda){
                            echo "<td>".$celda."</td>";
                        }
                    echo "</tr>";
                } */

                foreach ($consulta as $key => $fila) {
                    echo "<tr>";
                    echo "<td>". $fila['nombre']."</td>";
                    echo "<td>". $fila['descripcion']."</td>";
                    echo "<td>". $fila['annio']."</td>";
                    echo "<td>". $fila['estilo']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <a href="index.php">Introduce otro edificio</a>
</body>
</html>