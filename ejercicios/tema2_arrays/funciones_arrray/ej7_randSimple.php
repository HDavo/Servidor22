<?php 
/*
    Función: array_rand
    array_rand(array $array, int $num = 1): mixed
    array: El array de entrada.
    num: Especifica cuántas entradas deberían seleccionarse.
    
    Dados dos arrays unidimensionales, uno de tareas[] y otro de personas[], asigna de manera aleatoria una tarea a cada persona. Si ya le echas valor, crea un arraybidimensional de tareas_diarias[dia][tarea] y haz un organigrama donde asignes tareas a cada persona durante la semana
*/

$tareas = [
    'Pelar mandarinas',
    'Comer comida',
    'Beber bebida',
    'Recoger título',
    'Cobrar salario',
    'Barrer casa',
    'Fregar casa',
    'Pasear al perro',
    'Cambiar arena gato',
    'Lavar los platos',
    'Limpiar el salón'
];


$personas = [
    "Pepe",
    "Manolo",
    "Paco",
    "Benancio",
    // "Antonio"
];



//se genera una tarea y persona aleatoria cada vez que se recarga la página. -> echo $personas[$personas_al] ." tiene que: ". $tareas[$tareas_al];

for ($i=0; $i < count($personas); $i++) { //se genera un número de tareas igual al de la cantidad de elementos que tenga el array personas.
    $personas_al = array_rand($personas,1);
    $tareas_al = array_rand($tareas,1);
    echo $personas[$personas_al] ." tiene que: ". $tareas[$tareas_al]."<br>";
}
?>