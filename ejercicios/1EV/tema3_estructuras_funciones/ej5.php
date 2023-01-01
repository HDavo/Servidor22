<?php
    

    if (isset($_GET)) {
        echo "Has introducido: ";
        print_r($_GET['infoTexto']);

        function crear($pepe){
            echo "<table>";
            echo "<tr><th>TABLE</th><th>VALOR</th></tr>";
            foreach ($pepe as $clave => $valor) {
                echo "<tr><td>".$clave."</td><td>".$valor."</td></tr>";
            }
        echo "</table>";
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej5</title>
    <style>
        body{
            background-color: papayawhip;
        }

        table,th{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: white;
        }

        tr,td{
            height: 2%;
            width: 2%;
            border: 1px solid black;
            padding: 2%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div>
        <form action="#" method="get">
        <label for="infoTexto">Introduce lo que quieras: </label> 
        <input type="text" name="infoTexto" value="">
        <input type="submit" value="Enviar">
        </form>
        <div>
            <?php crear($_GET) ?>
        </div>
    </div>

</body>
</html>