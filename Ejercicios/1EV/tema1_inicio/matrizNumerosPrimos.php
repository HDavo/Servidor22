<?php
    $num =1; //valor inicial para verificar si los números primos

    function primo($valor){
        //se comprueba que exista un % desde el 2 al número, en ese caso no es primo
        for ($i=2; $i < $valor; $i++) { 
            if (($valor % $i) == 0) {
                //entra aquí si no es primo
                return false;
            }
        }
        //si es primo
        return true;
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Números primos</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body{
                background-color: papayawhip;
                width: 99vw;
                height: 99vh;
            }

            .general{
                background-color: papayawhip;
                width: 75%;
                height: 75%;
            }

            table{
                border-collapse: collapse;
                text-align: center;
                width: 100%;
                height: 100%;
            }

            thead{
                border: 1px solid black;
            }

            td{
                width: fit-content;
                height: fit-content;
                background-color: papayawhip;
                border: 1px solid black;
            }

            .primos{
                background-color: aquamarine;
            }

        </style>
    </head>
    <body>
        <div class="general">
            <table>
                <thead>
                    <td colspan="100%"><b>Tabla de números primos</b></td>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < 10; $i++) { ?> 
                        <tr>
                            <?php for ($j=0; $j < 10; $j++) { ?>
                                <?php if(primo($num)) { 
                                    echo "<td class='primos'><b>".$num."</b></td>";
                                }else{
                                    echo "<td>".$num."</td>";
                                }
                                $num++;
                            } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>