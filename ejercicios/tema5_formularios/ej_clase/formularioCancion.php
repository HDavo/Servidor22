<?php

    $cancion="";
    $hora=date("h");
    $min=date("i");

    $opcionesMinuto = [0,15,30,45];
    $mayores = array_filter($opcionesMinuto, function($m){
        global $min;
        return $m>$min;
    });

    if(empty($mayores)){
        $min=0;
        $hora++;
    }else{
        $min=array_shift($mayores); //shift extrae el primer valor/posición del array
    }


    $errores = [];

    if(isset($_POST['enviar'])){
        //comprobación de la existencia de una canción
        if(isset($_POST['cancion']) && $_POST['cancion']!=""){
            $cancion = ucfirst($_POST['cancion']);
        }else{
            $errores['cancion'] = "No puede estar vacío";
        }
        
        //comprobación de la existencia de una hora
        if(isset($_POST['hora']) && $_POST['hora']!=""){
            $hora = $_POST['hora'];
        }else{
            $errores['hora'] = "No puede estar vacía";
        }

        if(isset($_POST['min']) && $_POST['min']!=""){
            $min = $_POST['min'];
        }else{
            $errores['min']="No puede estar vacío";
        }

        if(count($errores)==0){
            //si no hay errores dentro del formulario guardamos lo recogido mediante post
            file_put_contents(
                "temazos.csv",
                "$cancion;$hora;$min\n",
                FILE_APPEND
            );

            //redirección
            header("Location: listado.php");
        }

        //para evitar ataques XCS
        function limpieza($datos){
            $datos = trim($datos);
            $datos = stripslashes($datos);
            $datos = htmlspecialchars($datos);
            return $datos;
        }
    }
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

            <label for="hora">H</label>
            <input type="number" name="hora" max="23" min="0" size="1" id="hora" value="<?=$hora?>">
            <?php
                if(isset($errores['cancion'])){
                    if (isset($errores['hora'])) {
                        echo '<div class="error">';
                        echo '<p>'.$errores['hora'].'</p>';
                        echo '</div>';
                    }
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
                    if (isset($errores['min'])) {
                        echo '<div class="error">';
                        echo '<p>'.$errores['min'].'</p>';
                        echo '</div>';
                    }
                }
            ?>
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </div>
</body>
</html>