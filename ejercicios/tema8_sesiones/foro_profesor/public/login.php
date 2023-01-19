<?php

use Random\Engine\Secure;

require("../src/init.php");
    //recoger los datos de post
    if (isset($_POST['login'])) {
        $nombre = $_POST['nombre'];
        $passwd = $_POST['passwd'];
        $recuerdame = $_POST['recuerdame'];
    }
    //consulta a base de datos por el usuario

    $user = $DB->ejecuta(
        "SELECT id, nombre, passwd from usuarios where nombre = ?",$_POST['nombre']
    ); //se pilla id para facilitar consultas dentro de edit, al meter esto dentro de sesión
    $user = $DB->obtenElDato();
    //con la información del usuario verificar la contraseña (en dos consultas porque esta en cifrado)
    if(password_verify($_POST['passwd'], $user['passwd'])){
        $_SESSION['id'] = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];

        if(isset($_POST['recuerdame']) && $_POST['recuerdame'] == 'on'){ //se ha pedido que se le recuerde
             //si ha pedido recuerdame
            //generar token
            $token = bin2hex(openssl_random_pseudo_bytes(LONG_TOKEN));
            //guardar token
            $DB->ejecuta(
                "INSERT INTO tokens (id_usuario, valor) VALUES (?,?)",
                $user['id'],
                $token
            );
            //cookie con token
            setcookie(
                'recuerdame',
                $token,
                [
                    "expires" => (time()+(7*24*60*60)),
                    // "secure" => true,
                    "httponly" => true
                ]
                
            );
            
            print("Clave correcta");

            //faltan cosas de token y del expire
            if(isset($_GET['redirect'])){
                header("Location: {$_GET['redirect']}");
            }
        }
    }else{

        echo "Mostrar error";
    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <div>
        <form action="" method="post">
            Usuario: <input type="text" name="nombre">
            Contraseña: <input type="password" name="passwd">
            Recuerdame: <input type="checkbox" name="recuerdame" id="">
            <input type="submit" name="login" value="Enviar">
        </form>
    </div>
    
</body>
</html>