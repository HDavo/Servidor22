<?php
    
    spl_autoload_register(function ($class) {
        $path = "./";
        $file = str_replace("\\", "/", $class);
        require("$path${file}.php");
    });
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de objetos</title>
</head>
<body>
    <?php
         //uso de examenFacil

        $cosa1 = new Clases\ExamenFacil('Fácil');
        echo "Nota del examen facil: ".$cosa1->obtenerNota();
        // $cosa1->setFecha('12/12/2022');

        //uso de examen chungo
        $cosa2 = new Clases\ExamenChungo('Ejemplo de examen chungo');
        echo "<br>Nota del examen chungo: ".$cosa2->obtenerNota();

        //uso de examen hp

        $cosa4 = new Clases\ExamenHp('Ejemplo de examen imposible');
        echo "<br>Nota del examen HP: ".$cosa3->obtenerNota();

    ?>
</body>
</html>