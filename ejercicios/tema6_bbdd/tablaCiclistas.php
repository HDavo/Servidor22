<?php
    require('./accesoBD.php');

    $stmt = $dbh->prepare('SELECT * FROM Ciclistas');
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    echo "<table>";
    echo "<tr>";
    while ($resultado=$stmt->fetch()) {
        if ($resultado['id']) $redireccion = $resultado['id'];
        echo '<td><a href="detalle.php?id='.$redireccion.'">'.$resultado['nombre'].'</a></td>';
            if ($resultado['num_trofeos']) {
                echo '<td>';
                for ($i=0; $i<$resultado['num_trofeos']; $i++) {
                    echo '<i class="fa-solid fa-trophy"></i>';
                }
                echo '</td>';
            }
        echo "</tr>";
    }
    echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, tr, td {
            border-collapse:collapse;
            border:1px solid red;
        }
        td:nth-of-type(2) {
            text-align:center;
        }
    </style>
    <title>Tabla de ciclistas</title>
</head>
<body>
    <a href="insertarTabla.php">Insertar</a>
    <a href="insertar.php">Insertar a mano</a>
    <a href="update.php">Update a mano</a>
    <a href="delete.php">Delete a mano</a>
    <a href="tablaCiclistas.php">Volver a la tabla</a>
</body>
</html>