<?php
    //tabla con recogida de datos

    
    if(isset($_GET['tabla'])){
        $r = $_GET['tabla'];
        //comprobación de que se ha mandado un valor en el formulario
        if($r == ""){
            $r = 0;
            $error = true;
        }else if($r < 0){ //para no permitir el envío de datos negativos o 0 dentro del formulario
            $error = true;
            // echo "pepe 1";
        }
    }else{
        $r = 0;
        // echo "pepe 2";
    }
    

    function formula(){
        $eleccion = "";
        $limite = 10;
        $formulario = <<< EOF
        <form action="" method="get">
            <label for="elector">Elige un número: </label>
            <input type="number" class="intro" step="1" name="tabla" max="20" min="0" value="<?= $eleccion ?>">
            <input type="submit" class="boton" value="Enviar">
        </form>
        EOF;
        print($formulario);
        
        $num = $eleccion;
        $i = "";
        $tabla = <<< EOF
        <table>
        <thead>
            <tr>
                <th colspan="2">Tabla del <?=$num?></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < $limite; $i++) { ?>
                <tr>
                    <td><?=$num?> x <?=$i?></td>
                    <td><?=$num*$i?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
        EOF;
        print($tabla);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php if ($error) { ?>
            <h3>Intenta introducir un dato válido.</h3>
        <?php } ?>
        <?php formula() ?>
    </div>
</body>
</html>