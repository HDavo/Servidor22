<?php
    require('../src/init.php');

    Mailer::SendEmail("fausto.ngomo@educa.madrid.org", "Bienvenido","<h1>Este es el cuerpo</h1>");

?>