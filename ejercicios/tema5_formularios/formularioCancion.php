<?php

    $cancion="";
    $hora=date("h");
    $min=date("i");

    $opcionesMinuto = [0,15,30,45];
    $mayores = array_filter($opcionesMinuto, function($m){
        global $min;
        return $m>$min;
    });

    // $errores = [];

    // if(isset($_POST['enviar'])){

    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de canción</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <label for="cancion">Tema</label>
            <input type="text" name="cancion" id="cancion" placeholder="Introduce un tema" value="<?=$cancion?>">
            <?php
                if(isset($errores['cancion'])){
                    print $pepe = <<<EOF
                        <div class="error">
                        <p> <?php $errores['hora'] ?></p>
                        </div>
                    EOF;
                }
            ?>
            <label for="min">MM</label>
            <select name="min" id="min">
                <?php 
                    array_walk(
                        $opcionesMinuto,
                        function($op, $k, $d){
                            $sel=($op==$d)?"selected":"";
                            echo "<option value='$op' $sel>$op</option>";
                        },$min
                    );
                ?>
            </select>
            <?php
                if(isset($errores['min'])){
                    print $pepe = <<<EOF
                        <div class="error">
                        <p> <?php $errores['min'] ?></p>
                        </div>
                    EOF;
                }
            ?>
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </div>
</body>
</html>