<?php
    //con el método GET se recibe desde el archivo html
    //realizado desde el archivo
    //se diferencia del método post en que GET lo muestra en la URL mientras que POST lo oculta y luego muestra sin que se pueda ver en la url
    if($_GET){
        $nombre=$_GET['nombre'];

        echo "Hola ". $nombre;
    }
?>