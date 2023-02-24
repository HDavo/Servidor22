<?php
use ejercicio2\clases\ExamenChungo;
use ejercicio2\clases\ExamenFacil;
use ejercicio2\clases\ExamenHp;
    
    /* spl_autoload_register( function ($class) {
        $class = str_replace('\\', '/',$class);
        echo '$class<br>';
        require('./'.$class.'.php'); //importante adaptar esta ruta a el plantemiento de carpetas.
        //al hacerlo de esta manera(con la estructura de carpetas usada, no es necesario poner también el nombre de la carpeta)
    });  */ 
    // require('./clases/ExamenFacil.php');
    // require('./clases/ExamenHP.php');
    // require('./clases/ExamenChungo.php');
/* 
    spl_autoload_register(function ($class) {
        $file = str_replace('\\', '/', $class);
        echo("./${file}.php");
        require('./$class.php');
    });
 */

    spl_autoload_register(function ($class) {
        $classPath = realpath("./");
        $file = str_replace('\\','/', $class);
        $include = "$classPath/${file}.php";
        require($include);
    });
    //uso de examenFacil

    $cosa1 = new ExamenFacil('Examen fácil');
    echo $cosa1->obtenerNota();
    $cosa1->setFecha('12/12/2022');

    //uso de examen chungo
    $cosa2 = new ExamenChungo('Ejemplo de examen chungo');
    echo $cosa2->obtenerNota();
    $cosa->setFecha('21/12/2022');


    //uso de examen hp

    $cosa4 = new ExamenHp('Ejemplo de examen imposible');
    echo $cosa3->obtenerNota();
    $cosa3->setFecha('12/03/2022');
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
    
</body>
</html>