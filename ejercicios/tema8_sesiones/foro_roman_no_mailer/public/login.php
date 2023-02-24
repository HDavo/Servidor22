<?php
    require('../src/init.php');


    //ver si el usuario tiene la sesion iniciada
    if (!isset($_SESSION['nombre'])) { //el usuario no tiene una sesion iniciada, se controla con el nombre
        if (isset($_POST['enviar'])) {
            if (isset($_POST['nombre']) && $_POST['nombre'] != "" && isset($_POST['passwd']) && $_POST['passwd'] != "") {
                $nombre = $_POST['nombre'];
                $pass = $_POST['passwd'];

                $db->ejecuta(
                    "SELECT * FROM usuarios where NOMBRE = ?;",
                    $nombre
                );
                $consulta = $db->obtenElDato();
                if ($consulta != "") {
                    //si no devuelve nada el usuario no existe
                    //si hace alguna devolución, el usuario existe

                    if (password_verify($pass, $consulta['passwd'])) { //consulta del post vs consulta de la bbdd asociada al usuario
                        $_SESSION['nombre'] = $consulta['nombre'];
                        $_SESSION['id'] = $consulta['id']; //[''] de consulta viene de la bbdd
                        $_SESSION['correo'] = $consulta['correo'];

                        //en el caso que el usuario marque recuerdame
                        if(isset($_POST['recuerdame']) && $_POST['recuerdame'] == "on"){
                            //se genera el token
                            $token = bin2hex(openssl_random_pseudo_bytes(DWESBaseDatos::LONG_TOKEN));

                            //Inserción del token la bbdd
                            $db->ejecuta(
                                "INSERT INTO tokens (id_usuario, valor) VALUES (?,?);",
                                $_SESSION['id'], $token
                            );

                            // establecer la cookie para el usuario
                            setcookie(
                                "recuerdame",
                                $token,
                                [
                                    "expires" => time() + 7 * 24 * 60 * 60,
                                    /*"secure" => true,*/
                                    "httponly" => true
                                ]
                                );
                        }

                        header("Location: ".$paginaAnterior);
                        die();
                    }else{
                        echo "contra incorrecta";
                    }
                }else{
                    echo "no existe el usuario";
                }
                print_r($consulta);
            }else{
                echo "hay errores";
            }
        }
    }else{//para el caso de que tenga iniciada sesion
        header("Location: index.php");
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <a href="index.php">index</a>
    <a href="login.php">login</a>
    <a href="register.php">register</a>
    <a href="private1.php">private1</a>
    <a href="private2.php">private2</a>
    <a href="private3.php">private3</a>
    <a href="logout.php">logout</a>
    <hr>

    <form action="" method="post">
        Nombre <input type="text" name="nombre" id="nombre">
        Pass <input type="password" name="passwd" id="passwd">
        Recuerdame <input type="checkbox" name="recuerdame" id="recuerdame">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>