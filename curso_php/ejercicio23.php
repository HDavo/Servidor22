<?php 
//uso de funciones (añadir ejemplos de más funciones)
$frutas=array("Fresa","Pera","Manzana");


echo "Antes de añadir elementos: ";
print_r($frutas);
echo "<br>";
/*array_push -> añade nuevos elementos a un array ya existente. Sigue la siguiente estructura:
array_push($array,elementos a añadir)*/

array_push($frutas, "Uva", "Sandía");
echo "<br> Despues de añadir elementos: ";
//después de añadir elementos
print_r($frutas);



?>