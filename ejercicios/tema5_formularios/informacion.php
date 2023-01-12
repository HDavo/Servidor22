<?php
    print_r($_SERVER);
    echo "<hr>";
    print_r($_GET);
    echo "<hr>";
    print_r($_POST);
    echo "<hr>";


    function idioma($pepe){
        foreach($pepe as $k => $v) {
            if($v == ["zh-cn"]){
                print "<h1>欢迎</h1>";
                break;
            }else if($v == ["es-ES"]){
                print "<h1>Bienvenido</h1>";
                break;
            } else {
                print "<h1>WELCOME</h1>";
                break;
            }
        }
    }
    
        
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de acceso</title>
</head>
<body>
    <div id="general">
        <!-- <form action="informacion.php" method="post">
            Nombre: <input type="text" name="=nombre"><br>
            Sexo:<br>
            Hombre<input type="radio" name="sexo" value="H">
            Mujer<input type="radio" name="sexo" value="M">
            Otro<input type="radio" name="sexo" value="O">
            <br>
            Color favorito: <input type="color" name="colorFavorito">
            <br>
            Número<input type="number" name="numeros">
            <br>
            <textarea name="" id="" cols="10" rows="10"></textarea>
            <br>
            <input type="submit" value="Enviar">
        </form> -->

        <div>
            <h1>Bienvenido</h1>
            <h2>Tus datos son:</h2>
            <p><?=print "IP CLIENTE ".$_SERVER["REMOTE_ADDR"]?></p>
            <p><?=print "NAVEGADOR ". $_SERVER["HTTP_USER_AGENT"] ?></p>
            <p><?=print "INFORMACION DEL SERVIDOR " . $_SERVER["SERVER_NAME"]?></p>

            <p><?= idioma($_SERVER)?></p>
        </div>
    </div>
</body>
</html>