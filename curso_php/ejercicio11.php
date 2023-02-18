<?php
    //ejemplo de uso de ifs anidados dentro de php
    if ($_POST) {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        
        //suma
        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $division=$valorA/$valorB;
        $multiplicacion=$valorA*$valorB;


        echo "El resultado de la suma es de: ".$suma."<br>";
        echo "El resultado de la resta es de: ".$resta."<br>";
        echo "El resultado de la división es de: ".$division."<br>";
        echo "El resultado de la multiplicación es de: ".$multiplicacion."<br>";

        if ($valorA==$valorB) {
            echo "El valor de A es igual al valor de B";
            if($valorA==4) {
                echo "El valor de A es de 4";
            }

            if($valorA==5) {
                echo "El valor es 5";
            }
        }
        if(($valorA==$valorB) && ($valorA==4)) {
            echo "El valor de A es igual a B y es un número 4";
        }

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
    <form action="ejercicio11.php" method="post">
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