<?php
    require("../src/init.php");

    //en el caso de que no esté registrado, se revisa el formulario de registro
    print_r($_POST);
    if (!isset($_SESSION['nombre'])) {
        if ($_POST['enviar']) {
            if (isset($_POST['nombre']) && $_POST['nombre']!="" && isset($_POST['passwd']) && $_POST['passwd']!="" && isset($_POST['correo']) && $_POST['correo']!="") {
               //obtenemos la información del formulario
                $nombre = $_POST['nombre'];
               $pass = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
               $correo = $_POST['correo'];

                //comparamos la información del formulario con la de la bbdd, para ver si ya está dentro de ella

                $db->ejecuta(
                    "SELECT * FROM usuarios WHERE nombre=?",
                    $nombre
                );

                $consulta = $db->obtenElDato();

                //en el caso de que el usuario no exista lo introducimos en la bbdd
                if($consulta == ""){
                    $db->ejecuta(
                        "INSERT INTO usuarios (nombre, passwd, correo) VALUES (?,?,?);",
                        $nombre, $pass, $correo
                    );

                    //establecemos una sesion con los datos introducidos, el id o nombre y desde ahi el resto de datos desde la bbdd
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['correo'] = $consulta['correo'];
                    $_SESSION['id'] = $consulta['id'];
                    // header("Location: ".$paginaAnterior);
                   
                    //aqui se envia el correo
                  
                        if($db->getExecuted()){
                            Mailer::sendEmail(
                                $_POST['correo'],
                                "Nuevo usuario",
                                <<<EOL
                                    Bienvenido {$_POST['nombre']},
                                    Has hecho bien en registrarte.
                                EOL
                            );
                            echo "<br>SE ha enviado el correo";
                        }
                        // no comprobado su funcionamiento
                        // header("Location: ".$paginaAnterior);
                        // die();
                    
                    // die();
                }else{
                    echo "El nombre de usuario ya existe";
                }

            }else{
                echo "Existen errores";
            }
        }
    }else{
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
    <title>Document</title>
</head>
<body>
    <h1>REGISTER</h1>
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
        Correo <input type="text" name="correo" id="correo">
        Pass <input type="password" name="passwd" id="passwd">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>