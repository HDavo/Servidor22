<?php
    /* Crea una función que sume todos los números entre dos parámetros dados: inicio y fin.
    PRUEBAS: Escribe una web que llame a la función 10 veces con números aleatorios entre 0 y 20. */

    if (isset($_GET)) {
       


        function suma(){
            $inicio = $_GET['num1'];
            $final = $_GET['num2'];
            $acu = 0;
            if ($inicio == $final) {
                echo "No hay valores entre los números introducidos";
            }elseif ($inicio < $final) {
                echo "El primer número elegido es: ";
                print($_GET['num1']."<br>");
                echo "El segundo número elegido es: ";
                print($_GET['num2']."<br>");
                for ($i=$inicio; $i < $final; $i++) { 
                    $acu += $i;
                }
            }else{
                echo "El primer número elegido es: ";
                print($_GET['num1']."<br>");
                echo "El segundo número elegido es: ";
                print($_GET['num2']."<br>");
                for ($i=$final; $i > $inicio ; $i--) { 
                    $acu+=$i;
                }
            }
            return $acu;
        }
    }
    
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <div>
        <form action="#" method="get">
            <label for="num1">Introduce un número: </label>
            <input type="number" name="num1"><br><br>
            <label for="num2">Introduce un número: </label>
            <input type="number" name="num2"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php echo suma()."<br>";
        echo "<br>";
        ?>
    </div>
</body>
</html>
