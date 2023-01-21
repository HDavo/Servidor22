<?php
    try{
        $dbname = "mibasededatos"; //se pone aqui el nombre de la base de datos a la que queremos acceder
        $user="pepe"; //nombre del usuario 
        $password = "1234"; //contraseña de acceso de la base de datos

        $dsn = "mysql:host=localhost;dbname=$dbname";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $dbh = new PDO($dsn, $user, $password); 
        /*objeto de acceso a base de datos que permite realizar consultas y otras operaciones sobre la base de datos que se haya conectado*/

    }catch(PDOException $e){
        print "!Error: ". $e->getMessage(). "\n";
        die();
    }
?>