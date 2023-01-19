<?php
    require("../src/init.php");
    if (isset($_POST['registrar'])) {
        $DB->ejecuta(
            "INSERT INTO usuarios (nombre,passwd,correo) values (?,?,?)",
            $_POST['nombre'],
            password_hash($_POST['passwd'],PASSWORD_DEFAULT),
            $_POST['correo']
        );

        $insertado = $DB->getExecuted();
        if($insertado){
            Mailer::sendEmail(
                $_POST['correo'],
                "Nuevo usuario",
                <<<EOL
                    Bienvenido {$_POST['nombre']},
                    Has hecho bien en registrarte.
                EOL
            );
        }
    }



    // serian necesarias poner validaciones dentro de los distintos cambios
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <?php if(!$insertado) { ?>
    
    }
    <form action="registro.php" method="post"><br>
        <input type="text" name="nombre" id="nombre"><br>
        <input type="password" name="passwd" id="passwd"><br>
        <input type="email" name="correo" id="correo"><br>
        <input type="submit" name="registrar" value="Registrar">
    </form>
    <?php } else { ?> 
        Usuario registrado
    <?php } ?>
</body>
</html>