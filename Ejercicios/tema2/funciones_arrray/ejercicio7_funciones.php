<?php 
/* Dados dos arrays unidimensionales, uno de tareas[] y otro de personas[], asigna de manera aleatoria una tarea a cada persona. Si ya le echas valor, crea un arraybidimensional de tareas_diarias[dia][tarea] y haz un organigrama donde asignes tareas a cada persona durante la semana.
Función: array_rand
*/

$tareas = ["limpieza", "cocina", "baños","habitaciones"];

$personas = ["pepe","manolo","paco","benancio"];

$personas_al = array_rand($personas,1);
$tareas_al = array_rand($tareas,1);

echo $personas[$personas_al] . "\n";
echo $tareas[$tareas_al] . "\n";

//desde aquí resolución del organigrama
$semana = [
    ["lunes",$tareas[0]],
    ["martes",$tareas[1]],
    ["miercoles",$tareas[2]],
    ["jueves",$tareas[3]],
    ["viernes",$tareas[4]],
    ["sabado",$tareas[5]],
    ["domingo",$tareas[6]]
];

?>