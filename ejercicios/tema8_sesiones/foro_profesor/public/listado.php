<?php
    require('../src/init.php');

    $DB->ejecuta("SELECT * FROM usuarios");
    $usuarios = $DB->obtenDatos();


    $title = "Listado de usuarios";
    $pageHeader = "Listado";
    $pageId = "Listado";

    $content = "Este es el contenido";

    require("template.php");

    //el controlador obtiene info del modelo
    $DB->ejecuta("select * from usuarios");
    $usuarios = $DB->obtenDatos();

    //Se lo pasa a template (se puede establecer contenido personalizado para cada una de las páginas)
    ob_start(); //mete el contenido especificado dentro deun buffer, por lo que no se muestra al usuario hasta que no se especifica

    //meter tabla 
    $content = ob_get_clean();


    

    /*<?php foreach($usuarios as $usuario) { ?>
        <?php 
            print_r($usuario);
        ?>
    <?php } ?> */
?>

<!-- lo siguiente nos viene dado por la plantilla -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$CONFIG['title']?></title>
    <style> 
        *{
            margin: 0 auto;
            padding: 0;
        }

        body{
            background-color: papayawhip;
        }
    </style>
</head>
<body>
    <h1>Hola Mundo</h1>
    
</body>
</html> -->