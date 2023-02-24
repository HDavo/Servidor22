<?php
    require('../src/init.php');

    if(isset($_SESSION['nombre'])){ //en el caso de que exista una sesión, la cerramos
        unset($_SESSION['nombre']);
    }

    session_destroy();

    //en el caso de que nos pidan destruir la cookie, se hace lo siguiente:

    setcookie("PHPSESSID", null, time()-1);
    setcookie("recuerdame", null, time()-1);

    header('Location: $paginaAnterior');
    die();
?>