<?php 
require("../src/init.php");

//se hace esto porque necesita autenticación

if(!isset($_SESSION['nombre']) || $_SESSION['nombre'] == "" ) {
    header("Location: login.php?redirect=edit.php");
    die();
}

if(isset($_POST['actualizar'])){
    // Actualizo todos los campos escritos, en este caso solo textarea
    $DB->ejecuta(
        "UPDATE usuarios SET descripcion = ? WHERE id = ?",
        $_POST['descripcion'],
        $_SESSION['id']
    );

    // Proceso imagen

    if(isset($_FILES['imagen'])) {
        $nombreTmp = $_FILES['imagen']['tmp_name'];
        $nombre = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        if($tipo == "image/png" || $tipo == "image/jpeg") {
            if($_FILES['imagen']['error'] == 0){
                // Mover el fichero a su posición final
                move_uploaded_file($nombreTmp, "upload/perfiles/".$_SESSION['id'].".png");
                //la ruta donde se guardan los ficheros debería ir en config
                // Actualizar la base de datos
                $DB->ejecuta(
                    "UPDATE usuarios SET img = ? WHERE id = ?",
                    "upload/perfiles/".$_SESSION['id'].".png",
                    $_SESSION['id']
                );
            }
        } else {
            // Mostrar error
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
</head>
<body>
    <h1>Aquí va el formulario para editar tu perfil</h1>
    <h3>Esta es tu información:</h3>
    <h4><?=$usuario['nombre']?></h4>
    <h4>Esta es tu descripción actual: </h4>
    <p><?=print($usuario['descripcion'])?></p>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <?php if($usuario['img'] != "") { ?>
            <img src="<?=$usuario['img']?>" />
        <?php } ?>
        <br>
        Imagen de perfil: <input type="file" accept="image/png,image/jpeg" name="imagen">
        <br>
        <!-- Email: <input type="email"><br>  necesitaria enviar un correo de confirmación-->
        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Introduce tu descripción"></textarea><br>
       
        <br>
        <input type="submit" value="Actualizar" name="actualizar">
    </form>
</body>
</html>