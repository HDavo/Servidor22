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

