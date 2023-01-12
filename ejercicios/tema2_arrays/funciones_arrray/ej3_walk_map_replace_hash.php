<?php
   /*
   Utiliza la función print_r() para ver la evolución de cada array.
    Funciones: array_walk, array_map, array_replace
    Extra: https://www.php.net/manual/es/function.password-hash.php
    $usuarios = [
        "jorge" => "1234",
        "amparo" => "admin",
        "mary" = > "",
    ]
    1 Enunciado: Crea una array bidimesional que guarda nombre de usuario y contraseña de usuario en texto claro. array_walk ejecuta una funcion predefinida mostrando nombre de usuario y contraseña
    2 Enunciado: Utilizando las funciones de contraseñas y la función array_map. Genera un array nuevo con los usuarios y su contraseña en formato hash.
    3 Enunciado: En base al ejercicio anterior cambia la función para que los usuarios sin contraseña tenga la contraseña "tmp2022"
    4 Enunciado: Haz un filtrado de usuarios sin contraseña, utiliza array_replace para establecer en el array original $usuarios la contraseña de los usuarios que no tenían.
    */

    $usuarios = [
        "jorge" => "1234",
        "amparo" => "admin",
        "mary" => ""
    ];
    //parte 1
    echo "Contraseñas sin cifrar<br>";
    function crearArray($valor, $indice){
        echo "Usuario: $indice <br> Contraseña: $valor <br>";
    }

    array_walk_recursive($usuarios, "crearArray");


    //parte 2

    function cifrar($valor){
        $cifrada = password_hash($valor, PASSWORD_DEFAULT);
        return ($cifrada);
    }

    echo "<br>Contraseñas cifradas<br>";
    $usuariosCifrados = array_map("cifrar", $usuarios);
    echo "<br>";
    array_walk_recursive($usuariosCifrados, "crearArray");

    function porDefecto($valor){
        if($valor==""){
            $valor="temp2022";
        }
        return ($valor);
    }

    echo "<br>Usuarios con contraseñas establecidas y por defecto (sin cifrar): <br>";
    $usuarios2 = array_map("porDefecto",$usuarios);
    array_walk_recursive($usuarios2, "crearArray");

    //parte 4

    function filtrar($array){
        if($array[1]==""){
            return ($array[0] ." ". $array[1]); //en el caso de que no tenga contraseña se devuelve el usuario que no tiene, con lo que sabemos cuál sufre el reemplazo de la siguiente parte
        }
    }
    echo "<br>Filtrado de usuarios sin contraseña: <br>";
    $filtrados = array_filter($usuarios, "filtrar"); //filtrado
    array_walk_recursive($filtrados, "crearArray"); //impresión de los filtrados

    echo "<br>Usuarios con contraseñas por defecto y creadas (sin cifrar): <br>";
    $usuarios = array_replace($usuarios, $usuarios2);
    array_walk_recursive($usuarios,"crearArray");

?>