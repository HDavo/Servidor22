<?php
    spl_autoload_register( function ($class) {
        $class = str_replace('\\', '/',$class);
        // echo "$class<br>";
        require("./Clases/$class.php");
    });

?>
