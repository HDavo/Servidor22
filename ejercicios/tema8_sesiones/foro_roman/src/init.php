<?php
    
    require('Mailer.php');
    require("config.php");
    require('paginaAnterior.php');
    require("DWESBaseDeDatos.php");
    require('../vendor/autoload.php');
   

    $db = DWESBaseDatos::obtenerInstancia();
    $db->inicializa(
        $CONFIG['db_name'],
        $CONFIG['db_user'],
        $CONFIG['db_passwd']
    );


    session_start();

    $username = (isset($_SESSION['nombre'])) ? $_SESSION['nombre'] : "anonimo";

?>