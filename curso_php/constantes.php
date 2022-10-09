<?php
/*
Para nombrarlas se usan mayúsculas 
para declararlas y/o usarlas no se usa $
para definirlas se usa define()
tienen un ámbito global por defecto
solo pueden tener valores escalares (no arrays)

No pueden meterse dentro de strings ni con comillas dobles
*/ 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de constantes</title>
</head>
<body>
    <?php
        define("CREADOR", "Pepe"); //para definir constantes propias
        //se pueden tener constantes con el mismo nombre si dentro del define le añadimos la posibilidad de que se escriba el nombre de la constante en minúsculas.
        //define("CREADOR", "Pepe", true);

        echo CREADOR;
        echo "\nEl creador es: " .CREADOR;

        
    ?>
</body>
</html>