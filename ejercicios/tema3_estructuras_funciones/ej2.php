<?php
    //Crea una página web que recorra una variable de tipo cadena accediendo a cada letra y escriba cada una en un h4. Usa for

    $cosa = "Danubio";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej2</title>
</head>
<body>
    <?php for ($i=0; $i < strlen($cosa); $i++) {  ?>
        <h4><?php echo $cosa[$i] ?></h4>
    <?php } ?>
</body>
</html>