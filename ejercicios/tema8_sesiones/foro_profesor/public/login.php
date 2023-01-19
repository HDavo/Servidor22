<?php
use Random\Engine\Secure;

require("../src/init.php");

echo "Hola";
print_r($_SESSION);
print_r($_POST);

    //recoger los datos de post
if (isset($_POST['login'])) {
    $nombre = $_POST['nombre'];
    $passwd = $_POST['passwd'];
    $recuerdame = $_POST['recuerdame'];

    //consulta a base de datos por el usuario

    $DB->ejecuta(
        "SELECT id, nombre, passwd FROM usuarios WHERE nombre = ?",
        $_POST['nombre']
    ); //se pilla id para facilitar consultas dentro de edit, al meter esto dentro de sesión

    $user = $DB->obtenElDato();

    //verificación de la contraseña con la información recuperada del usuario (en dos consultas porque esta en cifrado)
    if(password_verify($_POST['passwd'], $user['passwd'])){
        $_SESSION['id'] = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];

        print("Clave correcta");
        //Si se ha pedido que se le recuerde
        if(isset($_POST['recuerdame']) && $_POST['recuerdame'] == 'on'){ //'on' por ser un campo checkbox

            //generar token
            $token = bin2hex(openssl_random_pseudo_bytes(LONG_TOKEN));
            //guardar token
            $DB->ejecuta(
                "INSERT INTO tokens (id_usuario, valor) VALUES (?,?)",
                $_SESSION['id'],
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
        }
        
        if(isset($_GET['redirect'])){
            header("Location: {$_GET['redirect']}");
            die();
        }else{
            header("Location: listado.php");
            die();
        }

    }else{
        echo "Mostrar error";
    }
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