<?php
    require('./accesoBDBasico.php');

    $datos = [];
    $errores = [];
    $ultimoId = "";

    if (isset($_POST['enviar'])) {
        if (isset($_POST['nombre']) && $_POST['nombre'] != "" && $_POST['nombre'] != null) $datos['nombre'] = $_POST['nombre'];
        else $errores['nombre'] = "<span class='error'>*El campo nombre no puede estar vacío</span>";

        if (isset($_POST['trofeos']) && $_POST['trofeos'] != "" && $_POST['trofeos'] != null) $datos['trofeos'] = $_POST['trofeos'];
        else $errores['trofeos'] = "<span class='error'>*El campo trofeos no puede estar vacío</span>";

        //comprobaremos cuál es el último ID de la tabla, para insertar ese ID+1
        $resultado = $dbh->query('SELECT id FROM Ciclistas');
        //para que saque solo el nombre de las tablas y no el número con el ID asociativo
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($resultado as $key => $value) {
            $ultimoId = $value['id'];
        }
        //último ID+1 (ID automático para nuevos ciclistas)
        $ultimoId++;

        //insert de datos
        if(count($errores) == 0){
            // Prepare
            $stmt = $dbh->prepare("INSERT INTO Ciclistas (nombre, num_trofeos) VALUES (:nombre, :num_trofeos)");
            // Bind
            $nombre = $datos['nombre'];
            $num_trofeos = $datos['trofeos'];
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':num_trofeos', $num_trofeos);
            //bindParam vincula una variable de PHP a un parámetro de sustitución o signo de interrogación dentro de una sentencia SQL

            // Execute
            $stmt->execute();
            header("Location: tablaCiclistas.php");
        }

        //se cierra y se reinicia
        $resultado = null;
        $dbh = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:red;}
    </style>
</head>
<body>
    <form action="" method="post">
    Nombre <input type="text" name="nombre" value="<?= $_POST['nombre'] ?>"> <br>
    <?php if(isset($errores['nombre'])) echo $errores['nombre']."<br>" ?>

    <br>Número trofeos <input type="number" name="trofeos" min="1" max="95" value="<?= $_POST['trofeos'] ?>"> <br>
    <?php if(isset($errores['trofeos'])) echo $errores['trofeos']."<br>" ?>

    <br><br><input type="submit" name="enviar" value="ENVIAR"><br><br>
    </form>
    <a href="tablaCiclistas.php">lista</a>
</body>
</html>