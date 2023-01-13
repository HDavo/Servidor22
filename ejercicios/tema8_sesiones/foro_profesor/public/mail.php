<?php
    require('../src/init.php');

    Mailer::SendEmail("roman.kornyeyev1@educa.madrid.org", "Bienvenido","<h1>Este es el cuerpo</h1>");

?>