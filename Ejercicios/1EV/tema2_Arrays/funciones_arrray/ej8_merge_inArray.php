<?php

    /* Ejercicio 8
    Parte 1
    Array_merge() enunciado: Tenemos que guardar los datos de 4 arrays de personas(cada persona es $personaN) los datos de cada persona son: nombre,apellido,telefono y correo. Junta todos los array de personas en uno llamado $personas e imprimelos en una tabla.*/

    $persona1 = ["pepe","Perez", "683838383","pepe@pepe.com"];
    $persona2 = ["juan", "Jimenez", "696686848","juan@juan.com"];
    $persona3 = ["manolo", "Martinez","652343123","manolo@manolo.com"];
    $persona4 = ["sara","Sanabria","678494494","sara@sara.com"];

    $personas = array_merge([$persona1],[$persona2],[$persona3],[$persona4]);

    // echo "Primera parte:<br><br>";
    $cabeza = <<< EOF
    <table>
    <tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Correo</th></tr>

    EOF;
    print($cabeza);
    for ($f=0; $f<count($personas); $f++) {
        echo '<tr>';
        for ($c=0; $c<count($personas[$f]); $c++) {
            echo '<td>'.$personas[$f][$c].'</td>';
        }
        echo '</tr>';
    }

    /*
    segunda parte:
    Con el array $edades dado, remplaza las edades menores de 23 por un array de colores cada vez que sea asi.Una vez cambiado los que tengan 26 años se cambiaran por el siguiente array:
        $p26=["mayor","26"];
    */

    $edades=[ "25","22 ","24 ","29 ", "26","23","20","19","26","19","20","23"];
    $colores = ["amarillo","azul","rojo"];
    $p26=["mayor","26"];

    for ($i=0; $i < count($edades); $i++) { 
        if($edades[$i]<"23"){
            $edades[$i] = $colores[random_int(0,2)];
        }else if($edades[$i] == "26"){
            $edades[$i] = $p26;
        }
    }

    print_r($edades);

        /*
        tercera parte
    in_array: Crea una función que reciba como 1º parámetro un array, como 2º parámetro un valor y como 3º parámetro un mensaje de error. La función debe usar la función in_array para comprobar si el array contiene el valor especificado y si es el caso devolver la posición del array en el que tiene el valor, de lo contrario debe devolver el mensaje de error especificado (incluído si el array está vacío). */

    function busqueda($array, $valor, $mensaje){
        //en el caso de que se encuentre el valor dentro del array se devuelve el siguiente mensaje:
        if (in_array($valor, $array)) {
            echo "<br>";
            echo "<br>Se ha encontrado el valor, se encuentra en la posición: ". print_r(array_keys($array,$valor));
        }else{
            echo "";
            echo $mensaje;
        }
    }

    $numeros1=[25,22 ,24 ,29, 26,23,20,19,26,19,20,23];

    $numeros2 = [23,21,12,45,2,8,6,5,14];
    $mensajeError = "<br>Valor no encontrado";

    busqueda($numeros1,10, $mensajeError);
    echo "<br>";
    busqueda($numeros2,23,$mensajeError);
    echo "<br>";
?>