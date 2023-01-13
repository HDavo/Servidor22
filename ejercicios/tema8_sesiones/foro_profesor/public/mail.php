<?php
    require('../src/init.php');

    Mailer::SendEmail($CONFIG['enviador'], "Bienvenido","<h1>Este es el cuerpo</h1>");

?>