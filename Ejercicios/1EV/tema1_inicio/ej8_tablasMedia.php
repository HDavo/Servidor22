<?php
    //tabla con recogida de datos mediante get
    
    const LIMITE = 10;
    $error = false;

    if(isset($_GET['tabla'])){
        $num = ($_GET['tabla']);
        // print($num); //comprobación de que el valor se asigna de manera correcta a la variable
    }    

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
        $formulario = <<< EOF
        <form action="" method="get">
            <label for="elector">Elige un número: </label>
            <input type="number" class="intro" step="1" name="tabla" max="20" min="0" value="<?= $eleccion ?>">
            <input type="submit" class="boton" value="Enviar">
        </form>
        EOF;
        print($formulario);
    }

    /*
    function sacarTabla(){
        $limite = 10;

        if(isset($_GET['tabla'])){
            $num = ($_GET['tabla']);
            print($num);
            
            
            $i = "";
        $tabla = <<< EOF
        <table>
        <thead>
            <tr>
                <th colspan="2">Tabla de multiplicar <?=$num?></th>
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
        }; */
        
        // print_r($_GET);    

    // }  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar (selector)</title>
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
                background-color: papayawhip;
                color: black;
                text-align: center;
                padding: 1%;

            }
        </style>
</head>
<body>
    <div>
        <?php if ($error) { ?>
            <h3>Intenta introducir un dato válido.</h3>
        <?php } ?>
        <?php formula() ?>
        
        <?php if(isset($_GET['tabla'])){ ?>
            <table>
            <thead>
                <tr>
                    <th colspan="2">Tabla de multiplicar</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < LIMITE; $i++) { ?>
                    <tr>
                        <td><?=$num?> x <?=$i?></td>
                        <td><?=$num*$i?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</body>
</html>