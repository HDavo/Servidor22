<?php 

/*Dados estos arrays consigue que el resultado sea rojo, verde, naranja, azul usando la funcion array_merge*/
//merge -> mezcla los arrays y devuelve un array con el resultado de la fusión

$a1=array("a"=>"rojo");
$a2=array("b"=>"añil", "c"=>"violeta");
$a3=array("d"=>"verde","f"=>"naranja");
$a4=array("i"=>"azul");
$a5=array("g"=>"azul", "h"=>"blanco");


$resultado = array_merge($a1,$a3,$a4);
//dentro de los parentesis de la función se ponen los array con los elementos deseados, para obtener el orden deseado.

print_r($resultado);

?>