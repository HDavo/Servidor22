<?php

    require("../src/init.php");
    //se hace esto porque necesita autenticación
    if(!isset($_SESSION['nombre']) || $_SESSION['nombre'] == ""){
        header("Location: login.php?redirect=edit.php");
        die();
    }
 
    if(isset($_POST['actualizar'])){
        //Actualizo todos los campos escritos, en este caso solo textarea
        $DB->ejecuta(
            "UPDATE usuarios
            set descripcion = ?
            WHERE id = ?",
            $_POST['descripcion'],
            $_SESSION['id']
        );

        //Procesamiento de la imagen

        // print_r($_FILES);
        // die();
        
        if(isset($_FILES['imagen'])){
            $nombreTmp = $_FILES['imagen']['tmp_name'];
            $nombre = $_FILES['imagen']['name'];
            $tipo = $_FILES['imagen']['type'];

            if($tipo == "image/png" || $tipo == "image/jpeg"){
                if($_FILES['imagen']['error'] == 0){
                    //mover el fichero a su posicion final
                    move_uploaded_file($nombreTmp, "upload/perfiles/.".$_SESSION['id'].".png"); //la ruta deberia ir dentro de config

                    $DB->ejecuta(
                        "UPDATE usuarios SET img = ? WHERE id = ?",
                        "uploads/perfiles/".$_SESSION['id'].".png",
                        $_SESSION['id']
                    );
                }
            }else{
                //Mostrar error
            }
        }
    }

    //seria necesario mostrar los detalles anteriores con formato y luego los cambios que tengan lugar en ese mismo formato

    $DB->ejecuta(
        "SELECT *
        FROM usuarios
        WHERE id = ?",
        $_SESSION['id']
    );

    $usuario = $DB->obtenElDato();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de perfil</title>
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
    <h1>Aqui va el formulario para editar tu perfil</h1>
    <h3>Esta es tu información:</h3>
    <h4>Bienvenido, <?=$usuario['nombre']?></h4><br>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php if($usuario['img'] != ""){ ?> 
                <img src="<?=$usuario['img']?>" alt="foto_perfil"/> <br>
            <?php } ?>
            Imagen de perfil: <input type="file" accept="image/png,image/jpeg" name="imagen" id="imagen"><br>
            <!-- Email: <input type="email"><br>  necesitaria enviar un correo de confirmación-->
            Descripción: <br>
            <textarea name="descripcion" id="" cols="30" rows="10"><?=$usuario['descripcion'] ?>
            </textarea><br>
            <input type="submit" value="Actualizar" name="actualizar">
        </form>
    </div>
</body>
</html>