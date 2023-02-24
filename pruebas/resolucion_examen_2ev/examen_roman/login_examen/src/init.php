<?php 

    require("config.php"); //credenciales bbddd
    require("DWESBaseDatos.php"); //connexion para bbdd

    $db = DWESBaseDatos::obtenerInstancia();
    $db->inicializa(
        $CONFIG['db_name'],
        $CONFIG['db_user'],
        $CONFIG['db_passwd']
    );

    session_start();

    require("paginaAnterior.php");
    $userName = "anónimo";
    $userGroup = "anónimo";

    if(isset($_SESSION['nombre'])) {
        $userName = $_SESSION['nombre'];
        $userGroup = $_SESSION['nb_grupo'];
    }

    // $username = (isset($_SESSION['nombre']))? $_SESSION['nombre'] : "anonimo";

    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>