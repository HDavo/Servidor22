<?php
    //aqui elegimos el número del que obtendremos la tabla de multiplicar
    //también elegimos hasta que número queremos multiplicar
    $num = 7;
    $hasta = 10;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de multiplicar</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }

            #general{

                width: 80vw;
                height: 100vh;
                margin: auto;
            }

            table {
                width: 50%;
                height: 80%;
                margin: 0 auto;

            }

            tr, td {
                background-color: grey;
                color: white;
                text-align: center;
                padding: 2%;

            }
        </style>
    </head>
    <body>
        <div id="general">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Tabla del <?=$num?></th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < $hasta; $i++) { ?>
                    <tr>
                        <td><?=$num?> x <?=$i?></td>
                        <td><?=$num*$i?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

    </body>
</html>