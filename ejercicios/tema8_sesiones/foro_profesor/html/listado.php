<?php
    require('../src/init.php');

    $title = "Listado de usuarios";
    $pageHeader = "Listado";
    $pageId = "Listado";
    $content = "Este es el contenido";


    //el controlador obtiene info del modelo
    $DB->ejecuta("select * from usuarios");
    $usuarios = $DB->obtenDatos();

    //Se lo pasa a template (se puede establecer contenido personalizado para cada una de las páginas)
    ob_start();
    //con ob_start se mete el contenido especificado dentro de un buffer, por lo que no se muestra al usuario hasta que no se especifica.

    ?>

    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Foto</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <td><?=$usuario['nombre']?></td>
                    <td><img src="<?=$usuario['img']?>" alt="Imagen de usuario"></td>
                </tr>    
            <?php } ?>
        </tbody>
    </table>
    


    <?php

    $content=ob_get_clean(); //se limpia el buffer

    require("template.php");

    /*<?php foreach($usuarios as $usuario) { ?>
        <?php 
            print_r($usuario);
        ?>
    <?php } ?> */



/*
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
*/

?>