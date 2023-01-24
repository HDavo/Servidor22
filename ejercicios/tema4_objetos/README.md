# Notas de objetos

## De objetos básicos
Para especificar el tipo de variable que se puede establecer en el set.
```
public function setMatricula(String $matricula){
    $this->matricula = $matricula;
}
```
: + tipoVariable despúes de los paréntesis indica el tipo de variable que se va a devolver.
```
public function getMatricula():String{ 
    //los : indican el tipo de variable que va a devolver
        return $this->matricula;
}
```
Para establecer valores por defecto dentro de un constructor.
```
 public function __construct($matricula ="",$marca="",$carga=""){
    $this->matricula = $matricula;
    $this->marca = $marca;
    $this->carga = $carga;
}
```

## De objetos avanzados

### Ejemplo de autoload
Este autoload sirve para una estrutura en donde todas las clases están dentro de una sola carpeta y la controladora se encuentra en la carpeta general.
```
    
spl_autoload_register( function ($class) {
    $class = str_replace('\\', '/',$class);
    // echo "$class<br>";
    require("./$class.php"); //importante adaptar esta ruta a el plantemiento de carpetas.
    //al hacerlo de esta manera(con la estructura de carpetas usada, no es necesario poner también el nombre de la carpeta)
});

```

### Contenido pendiente de teoría de objetos
Implements, traits, extends, interfaces...