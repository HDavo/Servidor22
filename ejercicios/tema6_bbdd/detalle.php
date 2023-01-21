<?php
    require('./accesoBD.php');
    
    $id=$_GET['id'];
    $stmt = $dbh->prepare('SELECT * FROM Ciclistas WHERE id=:id');
    $stmt->bindParam(':id',$id);
    $stmt->setFetchMode(PDO::FETCH_ASSOC); //configuración del modo de recogida de datos, en este nos devuelve un array asociativo

    $stmt->execute();
    $resultado=$stmt->fetch();

    if(empty($resultado)){
        echo "error";
    }else{
        echo "<h1>Información detallada del ciclistas</h1>";
        echo "<p>Id: {$resul["id"]} <br>Nombre: {$resul["nombre"]} <br>Numero de trofeos:";
        for ($i=0; $i<$resul['num_trofeos']; $i++) {
            echo '<i class="fa-solid fa-trophy"></i>';
        }
        echo "</p>";
    }

    //Se cierra porque ya se ha terminado

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
    
</body>
</html>