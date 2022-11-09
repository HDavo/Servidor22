<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros 3</title>
</head>
<body>
    <?php
        //escritura de ficheros

        $miarchivo = fopen("archivo3.txt", "a+");

        //antes de hacer esto era un fichero vacío
        fwrite($miarchivo, " Escribiendo dentro del fichero mediante PHP");

        //se pone por si se han quedado partes del archivo dentro del buffer para forzar la escritura
        fflush($miarchivo);


        $pepe = stat("archivo3.txt");
        var_dump($pepe);

        $porte = filesize("archivo3.txt");

        // echo "<br>" . $porte;

    ?>
</body>
</html>