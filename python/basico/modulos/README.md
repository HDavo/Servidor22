# Módulos


*Para hacer uso de un módulo se usa la palabra import*
Para hacer uso de los módulos en el caso de que sean ficheros locales, debemos tener en cuenta la estructura de ficheros que tengamos para poder realizar un import de forma correcta (.. o . etc)

Por defecto, Python busca primero dentro del directorio en uso y, en caso de no encontrarlo, recurrer al syspath.

```
from funciones_matematicas import
```

Después de import podemos especificar las partes, funciones, clases, variables... que queremos importar o bien importarlo todo.

```
from funciones_matematicas import *
from funciones_matematicas import restar, sumar, multiplicar

```

# Paquetes

Se usan para organizar y reutilizar los módulos.
Son los directorios donde se guardarán los módulos relacionados entre sí.

## Directorio como paquete

para que se pueda usar una carpeta como paquete, dentro de ella debe tener un fichero *__init __.py*


## Subpaquetes
Dentro de un paquete se pueden poner otros paquetes. Se hace de la misma manera (siempre tienen que tener dentro un fichero *__init __.py* por carpeta) que al crear un paquete pero haciendoló dentro de una carpeta que ya sea un paquete.