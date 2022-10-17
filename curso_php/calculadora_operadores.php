<style>
    .resultado {
        color: red;
        font-weigth: bold;
        font-size: 32px;
    }
</style>

<?php
    //si el usuario pulsa el botón se realiza el código que se encuentra dentro de las llaves
        if(isset($_POST["button"])) { 
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $operacion=$_POST["operacion"];

            calcular($operacion,$num1,$num2); 
        }    
        //también podría hacerse declarando las variables numero como globales dentro de cada uno de los ifs de operaciones (solución hecha en el video)

        //de esta forma se pasan los distintos valores por parámetro

        function calcular($calculo,$numero1,$numero2){
            if(!strcmp("Suma",$calculo)) { //compara el string para ver si corresponde con Suma
                $resultado = $numero1 + $numero2;
                echo "<p class='resultado'> El resultado es: $resultado </p>";
            }
            if(!strcmp("Resta",$calculo)) { //compara el string para ver si corresponde con Suma
                $resultado = $numero1 - $numero2;
                echo "<p class='resultado'> El resultado es: $resultado </p>";
            }
            if(!strcmp("Multiplicación",$calculo)) { //compara el string para ver si corresponde con Suma
                $resultado = $numero1 - $numero2;
                echo "<p class='resultado'> El resultado es: $resultado </p>";
            }
            if(!strcmp("División",$calculo)) { //compara el string para ver si corresponde con Suma
                $resultado = $numero1 - $numero2;
                echo "<p class='resultado'> El resultado es: $resultado </p>";          
            }
            if(!strcmp("Módulo",$calculo)) { //compara el string para ver si corresponde con Suma
                $resultado = $numero1 - $numero2;
                echo "<p class='resultado'> El resultado es: $resultado </p>";           
            }
        }
    ?>