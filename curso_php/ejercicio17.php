<?php 
    //ejemplo de uso de valor nulos en la definición de un elemento de una variable
    //ejemplo de uso de llamadas y creación de funciones (métodos)
    function imprimirNombre($nombre,$apellido) { 
        /* en el caso de que el valor de uno de los argumentos de la función pueda ser nulo es
        recomendable darle un valor por defecto, como iniciarlo a nulo al definirlo */
        //para declarar como nulo --> $apellido="";
        
        //a esta función se le deben pasar argumentos
        //Rutinas o instrucciones
        echo "Hola ".$nombre." ".$apellido."<br>";
    }

    // para llamar a la función se hace de la siguiente manera 
    imprimirNombre("Oscar");
    /*en la llamada debe mandarse un argumento dentro de los paréntesis igual al que tiene la función, 
    en caso de no haber definido ninguno de ellos como nulo */
    //si esta definido como nulo podemos poner algunos argumentos como obligatorios y otros no. Ej. Nombre (Obligatorio), apellido1 (obligatorio) y apellido2 (opcional)

    imprimirNombre("Pepe","Pérez");
    imprimirNombre("Paco","Martinez");
?>

