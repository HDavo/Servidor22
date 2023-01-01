<?php 
    //Crea una función que reciba dos variables cualesquiera e intercambie su valor. Las variables tendrán ese valor fuera de la función. 
    //PRUEBA: Crea una web en la que se muestre cómo se comporta esta función con variables de distinto tipo.


    $pepe1 = 24;
    $pepe2 = "Pepe";

    //& hace que se modifique la variable enviada también fuera de la función

    function reverso(&$pepe1, &$pepe2){
        $acu = $pepe1;
        $pepe1 = $pepe2;
        $pepe2 = $acu;

        echo "Después del cambio: ";    
        echo $pepe1." ".$pepe2."<br>";
    }

    echo "Antes del cambio: ".$pepe1." ".$pepe2."<br>";
    reverso($pepe1,$pepe2);


?>