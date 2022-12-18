<!-- Modifica la página para que escriba la parte "Esta página..." en cursiva y "" en cursiva y negrita. NOTA: Puedes utilizar el operador "." para concatenar cadenas. -->

<?php
    //correcion hecha en clase
    $nombre=" Pepe";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo4.css">
</head>
<body>
    <h1>¡Hola Mundo!</h1>
    <h2>Esta página ha sido programada por <?=$nombre?></h2>
    <!-- h2 tiene la negrita por defecto -->
    <p>Esta página ha sido programada por <span><?=$nombre?></span></p>
</body>
</html>