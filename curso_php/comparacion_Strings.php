<?php 
       //A la hora de hacer comparaciones entre diferentes strings
    //recordar que 1 equivale a que no son iguales y 0 a que si lo son.
        $variable="Casa";
        $variable2="CASA";

        // // $resultado=strcmp($variable,$variable2);
        // print($resultado);

        $resultado2 = strcasecmp($variable,$variable2);
        print($resultado2);
        echo "<br>";

        if ($resultado2) { //ponerlo así equivale a $resultado == true, si ponemos !$resultado es igual a $resultado == false
            echo "No coinciden";
        }else{
            echo "Coinciden";
        }

        

?>