<?php

    //Crea una función que reciba un array con distintos tipos de valores de tal forma que:
    //Si son enteros: el primer entero sea elevado al cuadrado, el segundo entero sea elevado al cubo 
    //y así sucesivamente con los números enteros.
    // Si el valor es un float lo convertirá a su valor negativo (si es negativo al positivo)
    //Si es una cadena cambiará las mayúsuclas por minúsculas y viceversa.
    //En caso de no estar entre estos valores lo dejará sin modificar.


    function generar(... $valores){
        $manolo = [];
        $cont=0;
        // $aux=0;  
        $elevado1 = 2; $elevado2 = 3;
        $i=0;

        foreach($valores as $value){
            if (gettype($value)=="integer") {
                if ($cont<2) {
                    $manolo[$i] = pow($value,$elevado1);
                    $cont++;
                }elseif ($cont == 2) {
                    $manolo[$i] = pow($value,$elevado2);
                }
            }elseif(gettype($value)=="double"){
                $manolo[$i] = $value*(-1);
            }elseif(gettype($value)=="string"){
                if(ctype_upper($value)){ //verifica las mayúsculas
                    $manolo[$i] = strtolower($value);
                }elseif(ctype_lower($value)){ //verficia las minúsculas
                    $manolo[$i] = strtoupper($value);
                }
                
            }else{
                $manolo[$i] = $value;
            }
            $i++;
        }
        print_r($manolo);
    }


    $enviar = generar(3, false, "pepe", [2,3,4,5,5,5,5], 2.443, 'AD');
?>