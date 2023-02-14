# Cosas de funciones y de arrays

& modifica el valor de la variable dentro y fuera de la función, es decir, se pasa la variable por referencia y no por valor.

Ejemplo:
```
function cambiarDatos(&$nombre, &$edad){
    print "El nuevo nombre es $nombre";
    print "La nueva edad es $edad";
}
```

### Valores por defecto en funciones
Para definir valores por defecto se especifican dentro del paréntesis de la función (se sustituyen según el número de valores introducidos al llamar la función):
```
function generador($valor=1, $min=0, $max=12){}

// Se hace de la misma manera que en el caso de los objetos.
```
***

### Averiguar el primer carácter de una string
Para saber si un string contiene mayúsculas fuera del primer caracter: ctype_upper($string) (devuelve un boolean)
en el caso de minúsculas: ctype_lower($string) (devuelve un boolean).


***
### ... en funciones. 
Se usa para indicar que el número de parámetros a recibir no es fijo y sin un tipo definido de variable.
Los datos recibidos se recogen como un array.

```
function tipos(... $parametros){
    $array1 = []; //dentro de este array se guardan los resultados de recorrer del array enviado

    foreach ($parametros as $value){ //este foeach recorre el array y devuelve el tipo de variable de cada una de las posiciones
        $array1[gettype($value)] +=1;
    }
    return $array1;
}
```


***

Ejemplo de array asociativo:
```
$datos = [
    "nombre" => "Pepe Perez",
    "direccion" => "Calle Falsa, 123",
    "telefono" => "686761321",
    "edad" => 24
];
```
 