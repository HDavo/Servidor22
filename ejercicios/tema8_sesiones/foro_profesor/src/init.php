<?php 
    const LONG_TOKEN = 64; //seria mejor meterlo dentro de config
    require("config.php");  // carga de la configuración
    require("../vendor/autoload.php");
    require("DWESBaseDatos.php");
    require('Mailer.php');
    


    $DB=DWESBaseDatos::obtenerInstancia();
    $DB->inicializa(
        $CONFIG['db_name'],
        $CONFIG['db_user'],
        $CONFIG['db_pass']
    );
    //pon politica de cookies
    session_start();
    require("recuerdame.php");
?>