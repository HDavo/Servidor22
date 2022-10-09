<?php
//comentarios de una sola línea
/*Comentarios de
varias líneas */

//cualquier cosa fuera de las etiquetas de php es como si fuese un texto de html
//lo que está dentro, salvo impresión, no es visible para el usuario.
echo "Hola Mundo";
/*imprimir en pantalla (expresión)
no tiene valor de retorno
puede imprimir cadenas sin necesidad de concatenar*/ 

print_r("Hola Mundo2");
//imprime cualquier tipo de valor
//usado para imprimir el contenido de los arrays sin necesidad de bucles

print("Otra forma de imprimir");
/*otra forma de imprimir en pantalla. Es una función
no admite impresión de cadenas sin concatenación
Se diferencia de echo en que si tiene valor de retorno (devuelve 1), por lo que puede ser usada en expresiones si 
es necesario*/

 ?>