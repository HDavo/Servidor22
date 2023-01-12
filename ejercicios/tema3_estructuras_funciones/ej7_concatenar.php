<?php 

    //Crea una función que concatene todas las cadenas pasadas como parámetro 
    //utilizando el primer parámetro como seprador. PRUEBAS: Escribe una web que llame a la función 3 veces con cadenas.

    // print_r($_GET);
       function concatenar(){
            $sepa = $_GET['separador'];
            print($sepa);
            print_r($_GET['palabra1'].$sepa.$_GET['palabra2'].$sepa.$_GET['palabra3']);

        

        }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <div>
        <form action="#" method="get">
            <label for="separador">Introduce un separador: </label>
            <input type="text" name="separador"><br>
            <label for="palabra1">Introduce una palabra: </label>
            <input type="text" name="palabra1"><br>
            <label for="palabra2">Introduce una palabra: </label>
            <input type="text" name="palabra2"><br>
            <label for="palabra3">Introduce una palabra: </label>
            <input type="text" name="palabra3"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php if(isset($_GET)){
             concatenar(); 
            } ?>
    </div>
</body>
</html>