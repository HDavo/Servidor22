<?php
    //uso de operadores lógicos dentro de php
    if ($_POST) {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        
        if ($valorA != $valorB) && ($valorA > $valorB) {
            //ambas parte de la condición son verdaderas, en el caso de que una sea falsa no se mostraría nada
            echo "El valor de A es diferente al de B y también es mayor";
        }

        if ($valorA != $valorB) || ($valorA > $valorB) {
            //se evaluan las dos condiciones. Si alguno de los elementos es verdadero, todo será verdadero.
            echo "El valor de A es diferente al de B y también es mayor";
        }

        

        //para usar varias condiciones dentro de un bucle se usa && como en java o cualquier otro de los operadores lógicos
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores artimeticos</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>