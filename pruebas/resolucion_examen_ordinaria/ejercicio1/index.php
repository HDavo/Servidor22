<?php 

    require('config.php');
    require('DWESBaseDatos.php');

    //función para evitar crossite scripting
    // --- solo para string, ¡¡NO ARRAYS!! ---
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $datos = [];
    $errores = [];
    
    //si el form se ha enviado
    if (isset($_POST['enviar'])) {
        //comprobación del campo nombre
        if (isset($_POST['nombre']) && $_POST['nombre'] != "" && $_POST['nombre'] != null) $datos['nombre'] = clean_input($_POST['nombre']); 
        else $errores['nombre'] = "*El campo nombre no puede estar vacío";

        //comprobación del campo fecha de construcción
        if (isset($_POST['fecha']) && $_POST['fecha'] != "" && $_POST['fecha'] != null) $datos['fecha'] = clean_input($_POST['fecha']);
        else $errores['fecha'] = "*El campo fecha de construcción no puede estar vacío";

        //comprobación del campo comentarios
        if (isset($_POST['descripcion']) && $_POST['descripcion'] != "" && $_POST['descripcion'] != null) $datos['descripcion'] = clean_input($_POST['descripcion']);
        else $errores['descripcion'] = "*El campo descripción no puede estar vacío";

        //comprobación del campo estilo
        if (isset($_POST['estilo']) && $_POST['estilo'] != "" && $_POST['estilo'] != null) $datos['estilo'] = clean_input($_POST['estilo']);

        //si no hay errores (campos vacíos, etc.)
        if (count($errores) == 0) {
            //guardamos los datos
            //cadena va a ser cada línea del txt, en dicha línea guardamos cada dato, separándolo con ;

            $db = DWESBaseDatos::obtenerInstancia();
            $db->inicializa(
                $CONFIG['db_name'],
                $CONFIG['db_user'],
                $CONFIG['db_passwd']
            );

            $db->ejecuta(
                "INSERT INTO cosas (nombre, descripcion, annio, estilo) VALUES (?,?,?,?);",
                $datos['nombre'],$datos['descripcion'], $datos['fecha'], $datos['estilo']
            );


            $linea = implode(";",$datos); 
            //guardamos esto AL FINAL del archivo (como un >> en bash)
            file_put_contents("Prueba.txt", "$linea;\n", FILE_APPEND);
            //Redirect a la lista
            header('Location: listaForm.php');
            die();

        }
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        .error{color:red}
    </style>
</head>
<body>
    <form action="" method="post">
        Nombre: <input type="text" name="nombre" value="<?= $_POST['nombre'] ?>"> <br>
        <?php if(isset($errores['nombre'])) echo "<span class='error'>".$errores['nombre']."</span><br>" ?>

        <br>Descripcion: <br><textarea name="descripcion" cols="30" rows="7"><?= $_POST['descripcion'] ?></textarea><br>
        <?php if(isset($errores['descripcion'])) echo "<span class='error'>".$errores['descripcion']."</span><br>" ?>

        <br>Año de construcción: <input type="date" name="fecha" min="1" max="95" value="<?= $_POST['fecha'] ?>"> <br>
        <?php if(isset($errores['fecha'])) echo "<span class='error'>".$errores['fecha']."</span><br>" ?>

        <br>Estilo: <input type="text" name="estilo" value="<?= $_POST['estilo'] ?>"> <br>
        <!-- En la resolución original aquí había código para mostrar los errores a pesar de no guardarlos en ningún momento, mejor borrarlo. -->
    
        <br><br><input type="submit" name="enviar" value="ENVIAR"><br><br>
        <a href="listaForm.php">Ver listado</a><br><br>
        
    </form>
</body>
</html>