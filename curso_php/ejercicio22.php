<?php
     $frutas=array("fresa", "naranja","pera", "sandia", "tomate");
     //declaracion con indices por defecto (numeros desde el 0). --> indices numericos por defecto
 
 
     $frutas2=array("f"=>"fresa","n"=>"manzana","p"=>"pera");
     //declaracion de un array con los indices personalizados
     //siempre para el cambio de indices es necesario seguir la estructura de arriba y usar => antes del contenido. Estos valores dados sustituyen a las posiciones por defecto de los arrays. 
 
     print_r($frutas);
     print_r($frutas2);
 
     //ejemplo de mostrar el contenido de un array con indice definido por el usuario
     echo $frutas2["m"];
 
     for($i = 0; $i < count($frutas); $i++) {
        echo $frutas[$i]."<br>";
     }
     echo "<br>";
     echo "<br>";
     echo "<br>";


     //el for normal sirve si tenemos indices numericos, en el caso de que tengamos indices alfanumericos debemos usar for each

     foreach($frutas2 as $indice=>$valor) {
        // echo $indice."      ";

        // echo $frutas2[$indice]."<br>";

        echo "El valor ".$valor." Tiene el índice: ".$indice."<br>";

        //hasta el minuto 2:18:00
     }
?>