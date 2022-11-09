<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros 2</title>
</head>
<body>
    <?php
        $miarchivo = fopen("archivo1.txt","r+");

        if(!$miarchivo){
            echo "Error al abrir el archivo";
        }else{
            $todo = file_get_contents("archivo1.txt");
            //vuelca el contenido entero del fichero dentro de la variable declarada
            echo $todo . "<br>";
        }

        $arra = file("archivo1.txt");
        var_dump($arra);



    ?>
</body>
</html>