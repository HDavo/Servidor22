<?php
   
   require('config.php');
   require('DWESBaseDatos.php');

   $db = DWESBaseDatos::obtenerInstancia();
    $db->inicializa(
        $CONFIG['db_name'],
        $CONFIG['db_user'],
        $CONFIG['db_passwd']
    );

    $db->ejecuta(
        "SELECT * FROM logs;"
    );

    $consulta = $db->obtenDatos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de acceso</title>
    <style>
        <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .global {
            min-width: 100vw;
            ming-height: 100vh;
        }
        .heading{background-color: lightgrey;}
        table{margin: 0 auto;}
        table, tr, td{border-collapse: collapse; border: 1px solid black;}
        td{padding: 15px;}
    </style>
    </style>
</head>
<body>
    <table>
        <?php 
            //arrays asociativos
            $primeraFila = true;
            foreach ($consulta as $key => $fila) {
                //pintamos heading
                if($primeraFila){
                    echo "<tr>";
                    foreach ($fila as $llave => $value)if($llave != 'id'){
                        echo "<td class='heading'><b>$llave</b></td>";
                    }
                    echo "</tr>";
                }
                $primeraFila = false;

                //pintamos cuerpo
                echo "<tr>";
                echo "<td>". $fila['navegador']."</td>";
                echo "<td>". $fila['tiempo']."</td>";
                echo "</tr>";
            }

            // Ya se ha terminado; se cierra
            $$consulta = null;
            $mbd = null;
        ?>
    </table>
</body>
</html>