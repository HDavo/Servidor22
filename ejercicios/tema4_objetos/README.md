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
//añadir ejemplos de cada una de las implementaciones


#### Ejemplo de Interface
Implements -> interfaces
**Creación**
```
<?php 

    interface IPlataformaPago{
        public function estableceConexion():bool;
        public function compruebaSeguridad():bool;
        public function pagar(string $cuenta, int $cantidad);
    }
?>
```
**Uso**
```
<?php 
    class BitCoinConan implements IPlataformaPago{

        public function estableceConexion():bool{
            print "Conexión BitCoin Conan <br> ";
            return true;
        }

        public function compruebaSeguridad(): bool{
            print "Conexión seguro BitCoin Conan <br>";
            return true;
        }

        public function pagar(string $cuenta, int $cantidad){
            print "Pago realizado de $cantidad, a través de BitCoinConan <br> ";
        }
    }
?>
```
#### Ejemplo de clases abstractas
Extends -> clases abstractas y clases

**Creación**

```
<?php
    namespace validaciones;

    abstract class General{
       //falta el resto del contenido
        
        //Métodos que deben tener las clases que hereden pero que tendrá su implementación específica
        abstract public function pintar(); 

        abstract public function validarEspecifico();
    }
?>
```
**Uso**

```
 class Numero extends General{
        protected $tipo;
        protected $min;
        protected $max;
        //falta el resto del código
        //métodos abstractas que se deben poner
         public function validarEspecifico(){
            if($this->valor >= $this->min && $this->valor >= $this->max){
                return true;
            }else{
                $this->error = "Fuera de los límites permitidos, debe seleccionarse un valor entre $this->min y $this->max (ambos incluidos).";
                return false;
            }
        }

        function pintar(){
            echo "<label for='$this->name'>$this->label</label>";
            echo "<input type='$this->tipo' name='$this->name' min='$this->min' max='$this->max' value='$this->valor' placeholder='$this->min - $this->max'>";
        $this->imprimirError();
        }
```
#### Ejemplo de Trait
Traits -> use (dentro de una clase) + nb / dirección del trait
**Creación**
```
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
```

**Uso**
```
class MyHelloWorld extends Base {
    use SayWorld;
}
```

