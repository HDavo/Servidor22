<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros 1</title>
</head>
<body>
    <?php
        //apertura del fichero

        $miarchivo = fopen("archivo1.txt","r+");

        // if(!$miarchivo){
        //     echo "Error al abrir el fichero";
        // }else{
        //     $contenido = fread($miarchivo, filesize("archivo1.txt"));
        //     echo $contenido;
        // }

        //el modo w sobrescribe el contenido previo del fichero (este archivo antes tenía el mismo contenido que el archivo1)
        $miarchivo2 = fopen("archivo3.txt","w");

        $miarchivo3 = fopen("archivo4.txt","w");


        

        rewind($miarchivo);
        while(feof($miarchivo) == false){
            //nos indica con un boolean si el puntero está al principio del archivo (true está al inicio // false está en otra posición)
            echo fgets($miarchivo) . "<br>";
        }
    ?>
</body>
</html>