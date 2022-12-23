<?php 
//ejercicio incompleto (no funciona la captura de valor y falta la función de tabla)
    ///tabla de multiplicar con un selector de valor obtenido por get

    $num = 5; //tabla de multiplicar por defecto
    const limite = 10; //numeros que tendrá la tabla de multiplicar

    if (isset($_GET['tabla'])) {
        $t = $_GET['tabla'];
        $error = true;
        if ($t == "") {
            $t = 0;
            $error = true;
        }else if($t <0){
            $error = true;
        }
    }else{
        $t = 0;
        $error = false;
    }

    function crearTabla($valor){

        for ($i=0; $i < $valor; $i++) { 
            echo $i*$valor;
        }
    }

    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de multiplicar</title>
        <style>
            table, thead, tr, td{
                border: 1px solid black;
                background-color: papayawhip;
                text-align: center;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <div class="general">
            <?php if ($error) { ?>
                <h2>Introduce un número válido</h2>
            <?php } ?>

            <form action="" method="get">
                <label for="elector">Elige un número: </label>
                <input type="number" class="intro" step="1" name="tabla" max="20" min="0" value="<?= $eleccion ?>">
                <input type="submit" class="boton" value="Enviar">
            </form>

            <?php crearTabla($eleccion) ?> 
            <!-- <table>
                <thead>
                    <td colspan="100%"><b>Tabla de multiplicar</b></td>
                </thead>
                <tbody>
                    
                </tbody>
            </table> -->
        </div>
    </body>
</html>