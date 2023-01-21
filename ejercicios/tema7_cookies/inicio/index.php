<?php
    //para comprobar que se ha generado la cookie de manera correcta

    //Solución profesor
    $mensajeCookies = true;
    $showError = false;
    $reset = false;

    //¿El usuario acepta?
    if(isset($_GET['accion']) && $_GET['accion'] == "aceptar"){
        setcookie("verificado",1);
        $mensajeCookies = false;
        //en el momento en que se aceptan las cookies desaparece el mensaje y se crea una cookie
    }

    if(isset($_COOKIE['verificado']) && $_COOKIE['verificado'] == 1){
        $mensajeCookies = false;
        //se comprueba la existencia de la cookie del apartado anterior y que su valor es el que hemosd definido para no mostrar el mensaje
    }

    if(isset($_GET['showerror']) && $_GET['showerror']){
        $showError = true;
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Cookies</title>
    <style>
        /* css roman */
         *{box-sizing: border-box;}
        body{position: relative;}
        .cookies{
            display: flex;
            flex-flow: row;
            gap: 50px;
            position: fixed;
            left:0;
            right:0;
            bottom:0;
            padding: 15px;
            height:100px;
            border: 1px solid black;
            background-color:lightgray;
        }
        .cookies_acciones{
            flex-grow:1;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .cookies_texto{
            flex-grow:1;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap:10px;
        }
        .error_cookies{
            position: fixed;
            bottom: 100px;
            left:0;
            right:0;
            height: 50px;
            background-color:red;
            color: #fff;
            text-align: center;
            animation: sube 500ms ease-out forwards;
        }
        @keyframes sube{
            from{transform: translateY(50px)}
            to{transform: translateY(0)}
        }
    </style>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="configurado.php">ACCEDER</a>
    <?php if ($mensajeCookies) { ?>
        <?php if($showError) { ?>
            <div class="error_cookies">
                <p>Debes aceptar las cookies</p>
            </div>
        <?php } ?>
        <div class="cookies">
            <div class="cookies_acciones">
                <a href="?accion=aceptar">ACEPTAR</a>
                <a href="?accion=rechazar">RECHAZAR</a>
            </div>
            <p class='cookies_texto'>
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, 
                cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una 
                galería de textos y los mezcló de tal manera que logró hacer un libro de textos especi.
            </p>
        </div>
    <?php } ?> 
</body>
</html>