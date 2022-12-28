<?php
    $tareas = [
        'Pelar mandarinas',
        'Comer comida',
        'Beber bebida',
        'Recoger título',
        'Cobrar salario',
        'Barrer casa',
        'Fregar casa',
        // Añade más
    ];
    
    $minions = [
        'Oto',
        'Gah',
        'Bru',
        // Opcional
    ];
    


    
    
    $tareasMinions = [[],[],[],[],[],[]];
    for ($i=0; $i<count($tareasMinions); $i++) {
        $tareasMinions[$i][0]=$tareas[array_rand($tareas)];
        $tareasMinions[$i][1]=$minions[array_rand($minions)];
    }

    for ($i=0; $i<count($tareasMinions); $i++) {
        echo "Fila ".$i."<br>";
        for ($j=0; $j<count($tareasMinions[$i]); $j++) {
            echo $i."-".$j." ".$tareasMinions[$i][$j]." ";
        }
        echo "<br>";
    } 
    /* echo "<hr>";
    for ($i=0; $i<5; $i++) {
            $tareas_diarias=[
                ["Lunes",$tareas[$aleatorioTareas[$j]]],
                ["Martes",$tareas[$aleatorioTareas[$j]]],
                ["Miércoles",$tareas[$aleatorioTareas[$j]]],
                ["Jueves",$tareas[$aleatorioTareas[$j]]],
                ["Viernes",$tareas[$aleatorioTareas[$j]]],
            ];
    }
    
    echo "<hr>";
    for ($i=0; $i<count($tareas_diarias); $i++) {
        for ($j=0; $j<count($tareas_diarias[$i]); $j++) {
            echo $tareas_diarias[$i][$j]." ";
        }
        echo "<br>";
    } */
?>