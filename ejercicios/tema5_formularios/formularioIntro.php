<?php
    //formulario con ejemplos de acceso a $_SERVER, para mostrar mensaje distintos en función del idioma del navegador

    // print_r($_SERVER['HTTP_ACCEPT_LANGUAGE']); //para ver el idioma del navegador / sistema

    // print "Este es tu sistema operativo y tu navegador: ".$_SERVER['HTTP_USER_AGENT']."<br>";

    //para poder ver solamente el idioma se debe separar el resultado de esa posición de $_SERVER. idioma se convierte en un array y dentro de este array nos quedamos solo con la primera posición.
    $idioma = explode("-", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    
    // function lenguaje(){
    //     $idioma = explode("-", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    //     print "Idioma: ".strtoupper($idioma[0])."<br>";
    // }
    
    function eleccion(){
        $idioma = explode("-", $_SERVER['HTTP_ACCEPT_LANGUAGE']);

        switch ($idioma[0]) {
            case 'es':
                print "Bienvenido/a";
                break;
            case 'en':
                print "Welcome";
                break;
            case 'zh':
                print "欢迎";
            case 'fr':
                print "Bienvenu/e";
            default:
                print "Welcome";
                break;
        }
    }

    $error = false;
    $nombre = "";

    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        if($nombre == ""){
            $nombre = "Anónimo/a";
            $error= true;
        }
    }
    
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
</head>
<body>
    <div>
        <h1><?= eleccion(); print " ".$nombre ?></h1>
        <h2>Tus datos son:</h2>
        <p><?=print "IP CLIENTE ".$_SERVER["REMOTE_ADDR"]?></p>
        <p><?=print "NAVEGADOR ". $_SERVER["HTTP_USER_AGENT"] ?></p>
        <p><?=print "INFORMACION DEL SERVIDOR " . $_SERVER["SERVER_NAME"]?></p>
    </div>
    <div>
        <form action="" method="get">
            Introduce tu nombre: <input type="text" name="nombre" value=<?= "$nombre"?>>
            <input type="submit" value="Enviar" name="mandar">
            <?php if($error) { ?>
                <p>Te has equivocado al poner tu nombre</p>
            <?php } ?>
        </form>
    </div>
</body>
</html>
