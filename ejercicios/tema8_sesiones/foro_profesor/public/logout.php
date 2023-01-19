<?php
    //aqui se debe eliminar la sesión

    require("../src/init.php");

    if(isset($_SESSION['nombre'])){
        $_SESSION['nombre'] = ""; //redundante
        unset($_SESSION['nombre']);
    }
    
    //esto es lo necesario para acaar la sesión
    session_destroy();

    setcookie("PHPSESSID", null);

    
    header("Location: listado.php");
    die();
?>