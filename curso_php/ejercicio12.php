<?php
    //uso de if else dentro de php
    if ($_POST) {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        
       if($valorA != $valorB) {
            echo "El valor de A es diferente al de B";
       }else{
            echo "El valor de A es igual al de B";
       }


        //los operadores relacionales son los mismos que en java
        //para usar varias condiciones dentro de un bucle se usa && como en java
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
    <form action="ejercicio12.php" method="post">
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