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



## Paquetes distribuibles e instalación 
Con esto se consigue que podamos usar un paquete o módulo sin importar la ruta en la que estemos dentro del sistema. Para ello es necesario unirlo a la instalación de Python de nuestro sistema.

Para hacer esto es necesario seguir los siguientes pasos:

1. Creación del paquete
2. Después de haber creado el paquete, crear un fichero setup.py en donde pondremos los detalles de nuestro paquete como el ejemplo. 

```
from setuptools import setup

setup(
    name="paquete_calculos",
    version="1.0",
    description="Paquete con redondeo y potencia",
    author="Pepe",
    author_email="pepe@pepemail.com",
    packages=["calculos","calculos.redondeo_potencia"]
)
```
3. Colocar el fichero setup en el directorio deseado.
4. Abrir el directorio en donde se ha puesto el fichero setup y ejecutar el siguiente comando: `python setup.py sdist`
5. Después de haber ejecutado este comando se nos genera un directorio y fichero comrpimido con el paquete distribuible.
6. Para instalar el paquete se debe acceder al directorio dist y dentro de él ejecutar el siguiente comando: `pip3 install nb_paquete_comprimido`
7. Una vez se ha hecho la instalación de manera correcta, se puede usar el paquete desde cualquier directorio del equipo ya que ha pasado a formar parte del Python que tenemos instalado.

En el caso de querer desintalar un paquete el comando para hacerlo es: `pip3 uninstall nb_paquete`