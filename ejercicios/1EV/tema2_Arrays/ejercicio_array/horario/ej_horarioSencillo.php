<?php
    $dias = [
        0=> "Hora",
        1=> "Lunes",
        2=> "Martes",
        3 =>"Miercoles",
        4=>"Jueves",
        5=>"Viernes",
    ];

    $horas = [
        0=> "16:00 - 16:55",
        1=>"16:55 - 17:50",
        2=>"17:50 - 18:45",
        3=>"18:45 - 19:10",
        4=>"19:10 - 20:05",
        5=>"20:05 - 21:00",
        6=>"21:00 - 21:55"];

    $asignaturas = [
        0=>"Desarrollo en Entorno Cliente",
        1=>"Inglés técnico",
        2=>"Empresa",
        3=>"Desarrollo en Entorno Servidor",
        4=>"Despliegue de Aplicaciones Web",
        5=>"Interfaces",
    ];
    $recreo = [
        0=>"R",
        1=>"E",
        2=>"CR",
        3=>"E",
        4=>"O",
    ];
    $horario = [
        0=> [$horas[0],$horas[1],$horas[2],$horas[3],$horas[4],$horas[5],$horas[6]],
        1=> [$asignaturas[0],$asignaturas[0],$asignaturas[0],$recreo[0],$asignaturas[2],$asignaturas[2],$asignaturas[1]],
        2=> [$asignaturas[1],$asignaturas[4],$asignaturas[4],$recreo[1],$asignaturas[5],$asignaturas[5],$asignaturas[5]],
        3=> [$asignaturas[5],$asignaturas[5],$asignaturas[5],$recreo[2],$asignaturas[3],$asignaturas[3],$asignaturas[3]],
        4=> [$asignaturas[2],$asignaturas[4],$asignaturas[4],$recreo[3],$asignaturas[3],$asignaturas[3],$asignaturas[3]],
        5=> [$asignaturas[3],$asignaturas[3],$asignaturas[3],$recreo[4],$asignaturas[0],$asignaturas[0],$asignaturas[0]],
    ];

    // $horario = [
    //     0=>"16:00 - 16:55","DWEC","IT","INT","IEIE","DES",
    //     1=>"16:55 - 17:50", "DWEC","DEW","INT","DEW","DES",
    //     2=>"17:50 - 18:45", "DWEC", "DEW","INT","DEW","DES",
    //     3=>"18:45 - 19:10", "RECREO",
    //     4=>"19:10 - 20:05", "IEIE","INT","DES","DES","DWEC",
    //     5=>"20:05 - 21:00", "IEIE","INT","DES","DES","DWEC",
    //     6=>"20:00 - 21:55", "IT","INT","DES","DES","DWEC",
    // ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link rel="stylesheet" href="./css/estilos_arrays.css">
</head>
<body>
    <table>
        <tr id="dias">    
            <?php for($i = 0; $i < count($dias); $i++) { ?> 
                <td>
                    <?= $dias[$i]?>
                </td>
            <?php } ?> 
        </tr>
        <tr>
            <?php for($i = 0; $i < count($horario); $i++) { ?>
                <td>
                    <?php echo($horario[$i][0])?>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i = 0; $i < count($horario); $i++) { ?>
                <td>
                    <?php echo($horario[$i][1])?>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i = 0; $i < count($horario); $i++) { ?>
                <td>
                    <p><?php echo($horario[$i][2])?></p>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i = 0; $i < count($horario); $i++) { ?>
                <td>
                    <p><?php echo($horario[$i][3])?></p>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i = 0; $i < count($horario); $i++) { ?>
                <td>
                    <p><?php echo($horario[$i][4])?></p>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i = 0; $i < count($horario); $i++) { ?>
                <td>
                    <p><?php echo($horario[$i][5])?></p>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <?php for($i = 0; $i < count($horario); $i++) { ?>
                <td>
                    <p><?php echo($horario[$i][6])?></p>
                </td>
            <?php } ?>
        </tr>
    </table>
</body>
</html>