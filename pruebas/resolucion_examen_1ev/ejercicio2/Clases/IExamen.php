<?php
    namespace Clases;
    // require('./TieneFecha.php');

    interface IExamen{
        function intentar(string $nombre); //esto significa que es el tipo de dato que debe recibir
        function obtenerNota():int; //esto define el tipo de variable que debe devolver la función al ser implementada
    }
?>