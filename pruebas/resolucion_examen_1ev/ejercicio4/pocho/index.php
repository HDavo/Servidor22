<?php
    $datos = [];
    $errores = [];
    $selected = "";

    $opcExtras = ["Caja madera", "Tarjeta regalo", "Envío urgente", "Panecillos", "Membrillo"];



    if (isset($_POST['enviar'])) {
        if (isset($_POST['nombre']) && $_POST['nombre'] != "" && $_POST['nombre'] != null) $datos['nombre'] = $_POST['nombre'];
        else $errores['nombre'] = "<span class='error'>*El campo nombre no puede estar vacío</span>";

        if (isset($_POST['direccion']) && $_POST['direccion'] != "" && $_POST['direccion'] != null) $datos['direccion'] = $_POST['direccion'];
        else $errores['direccion'] = "<span class='error'>*El campo dirección no puede estar vacío</span>"; 

        if (isset($_POST['extras']) && !empty($_POST['extras']))  $datos['extras'] = strtolower(implode(", ", $_POST['extras']));
        else $errores['extras']="<span class='error'>*Debes seleccionar al menos una opión</span>";



        

        //mensaje GRACIAS
        function mensaje(){
            global $errores;
            if (count($errores) == 0) {
                echo "<span class='green'>Gracias por su pedido</span>";
                // echo $_POST['nombre'];
                // echo $_POST['direccion'];
            }
        }
        //vaciado de datos si todo está ok
        if (count($errores) == 0) {
            $_POST['nombre'] = "";
            $_POST['direccion'] = "";
            $_POST['extras'] = "";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="#" method="post">
        <label for="nombre">Nombre del queso: </label>
        <input type="text" name="nombre" value="<?= $_POST['nombre'] ?>"><br>
        <?php if(isset($errores['nombre'])) echo $errores['nombre']."<br>" ?>
        <label for="direccion">Dirección del envío</label>
        <input type="text" name="direccion" value="<?= $_POST['direccion']?>"><br>
        <?php if(isset($errores['direccion'])) echo $errores['direccion']."<br>" ?>
        <label for="extras">Extras: </label><br>
        <?php
            foreach ($opcExtras as $value) {
                if (!empty($_POST['extras'])) {
                    (in_array($value, $_POST['extras']))? $selected = "checked": $selected = "";
                }
                echo "$value<input type='checkbox' name='extras[]' value='$value' $selected><br>";
            }
        ?>
        <?php if(isset($errores['extras'])) echo "<br>".$errores['extras']."<br>"; ?>
        <input type="submit" name="enviar" value="ENVIAR"><br><br>

        <?php mensaje(); ?>
    </form>
</body>
</html>