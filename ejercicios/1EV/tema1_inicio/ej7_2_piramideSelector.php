<?php 

    $num = 0;

    function crearPiramide($filas) {
        $cadena = null;
        for ($i = 1; $i <= $filas; $i++) {
            for ($j = $i; $j <= $i; $j++) {
                $cadena .= "*"; //se concatenan las cadenas producidas por cada ciclo del for, este ciclo se repite tantas veces como el número de fila en el que nos encontramos
            }
            echo "<p style='background-color: rgb(".rand(1,255).",".rand(1,255).",".rand(1,255).")'>".$cadena."</p>"; //color aleatorio para cada fila
        }
    }

    //para guardar el valor del número de filas introducido mediante el formulario

    if(isset($_GET['filas'])){
        $r = $_GET['filas'];
        //comprobación de que se ha mandado un valor en el formulario
        if($r == ""){
            $r = 0;
            $error = true;
        }else if($r <= 0){ //para no permitir el envío de datos negativos o 0 dentro del formulario
            $error = true;
            // echo "pepe 1";
        }
    }else{
        $r = 0;
        // echo "pepe 2";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pirámide con selector</title>
        <style>
            *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: arial;
            }
            html{
                font-size: 62.5%;
            }
            body{
                font-size: 1.6rem;
                background-color: #eaeaea;
            }
            
            .general{
                margin: 0 auto;
                width: 100vw;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-flow: column;
            }
            p{
                font-size: 3rem;
                line-height: 4rem;
                border-radius: .5rem;
                letter-spacing: 1rem;
                padding-left: 1rem;
            }
            form{
                display: flex;
                flex-flow: row wrap;
                margin-bottom: 2.5rem;
            }
            input{
                height: 3rem;
            }
            .nombre{
                width: 5rem;
            }
            .introNum{
                width: 15rem;
            }
            .boton{
                width: 20rem;
                height: 3rem;
                border: none;
                background-color: grey;
                color: #000;
            }
        </style>
    </head>
    <body>
        <div class="general">
            <?php if ($error) { ?>
                <h3>Intenta introducir un dato válido.</h3>
            <?php } ?>

            <form action="" method="get">
                <label for="filas" class="nombre">Filas:</label>
                <input type="number" class="introNum" step="1" name="filas" value="<?= $r ?>">
                <br>
                <input class="boton" type="submit" value="Generar">
            </form>
            <?php crearPiramide($r) ?>
        </div>
    </body>
</html>