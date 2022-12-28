<?php
    $dec = "Desarrollo Entorno Cliente";
    $des = "Desarrollo Entorno Servidor";
    $emp = "Iniciativa Emprendedora";
    $ing = "Inglés Técnico";
    $diw = "Diseño de Interfaces Web";
    $daw = "Despliegue de Aplicaciones Web";

    $horario = [
        0 => ["", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes"],
        1 => ["16:00", $dec, $ing, $diw, $emp, $des],
        2 => ["17:00", $dec, $daw, $diw, $daw, $des],
        3 => ["17:50", $dec, $daw, $diw, $daw, $des],
        4 => ["18:45", "P", "A", "T", "I", "O"],
        5 => ["19:10", $emp, $diw, $des, $des, $dec],
        6 => ["20:05", $emp, $diw, $des, $des, $dec],
        7 => ["21:00", $ing, $diw, $des, $des, $dec],
    ];

    function pintarHorario(){
        global $horario;
        $num=1;
        $aux=1;
        for ($i = 0; $i <count($horario); $i++) {
            echo "<tr>";
                for($j = 0; $j <count($horario[$i]); $j++){
                    echo "<td ";
                    if ($i==0 || $j==0) { //filas de días o columna de horas con color distinto
                        echo 'class="pepe"';
                    }

                    $aux=$i;
                    while ($horario[$aux][$j] == $horario[$aux+1][$j]) {
                        
                        $num++;
                        $aux++;
                    }
                    if ($horario[$i][$j]!=$horario[$i-1][$j] || $horario[$i][$j]==null)
                    echo 'rowspan="'.$num.'">'.$horario[$i][$j]."</td>";
                    $num=1;
                    //si una clase dura más de una hora no se pinta el nombre más que una sola vez
                }
                
            echo "</tr>";
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario Completo</title>
    <!-- <link rel="stylesheet" href="./css/estilos_arrays.css"> -->
    <style>

        .general{
            width: 70%;
            margin: 0 auto;
        }
        table, tr, td {
            border:1px solid rgb(0, 0, 0);
            border-collapse: collapse;
            text-align: center;
            padding: 0.25%;
        }

        table {
            width: 100%;
        }
        td:first-child {
            width:5%;
        }
        .pepe {
            background-color: grey;
            color: papayawhip;
        }
    </style>
</head>
<body>
    <div class="general"> 
        <table>
            <?= pintarHorario()?>
        </table>
    </div>
</body>
</html>