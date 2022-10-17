<!-- ejemplo de como hacer todo dentro de un solo documento -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores con formulario</title>
</head>
<body>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operacion"></label>
            <select name="operacion" id="operacion">
                <option>Suma</option>
                <option>Resta</option>
                <option>Multiplicación </option>
                <option>División</option>
                <option>Módulo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
        </p>
    </form>
    <p>&nbsp;</p>

    <?php
    //si el usuario pulsa el botón se realiza el código que se encuentra dentro de las llaves
        if(isset($_POST["button"])) { 
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];

            if(!strcmp("Suma",$operacion)) { //compara el string para ver si corresponde con Suma
                echo "El resultado es: " . ($numero1 + $numero2);
            }
            if(!strcmp("Resta",$operacion)) { //compara el string para ver si corresponde con Suma
                echo "El resultado es: " . ($numero1 - $numero2);
            }
            if(!strcmp("Multiplicación",$operacion)) { //compara el string para ver si corresponde con Suma
                echo "El resultado es: " . ($numero1 * $numero2);
            }
            if(!strcmp("División",$operacion)) { //compara el string para ver si corresponde con Suma
                echo "El resultado es: " . ($numero1 / $numero2);
            }
            if(!strcmp("Módulo",$operacion)) { //compara el string para ver si corresponde con Suma
                echo "El resultado es: " . ($numero1 % $numero2);
            }
        }
    ?>
</body>
</html>