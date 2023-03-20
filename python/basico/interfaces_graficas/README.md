# Interfaces gráficas

Para hacerlo pueden usarse distintas librerías como:

* Tkinter: librería puente entre Python y TCL/TK
* WxPython
* PyQT
* PyGTK

<!-- ## Pasos
Para poder usar esta librería se debe instalar antes en el sistema, usando el siguiente comando:
`sudo apt install python3-tk` -->

# Tkinter

Esta librería divide las interfaces gráficas en diferentes partes o widgets. El primero de ellos es el llamado raíz, que actúa de contenedor general para el resto de partes.
Dentro de una raíz o contenedor general pueden haber otros widgets llamados frames.

## Elementos que usa Tkinter

---

### Raiz

### Frames

### Labels

variableLabel = Label(contenedor, opciones)

Son un tipo de widgets usados para mostrar texto o imágenes. Su única funcionalidad es mostrar información, por lo que no se puede interactuar con ellos y su contenido.

***Opciones de Label***

- Text: texto que se muestra.
- Anchor:control de la posición del texto.
- bg: color de fondo.
- bitmap: mapa de bits que se mostrará como gráfico.
- bd: grosor del borde.
- image: para mostrar una imagen.
- font: tipo de fuente a mostrar.
- justify:
- width / heigth: no admiten píxeles, se hace en unidades.

### Entry
variableEntry = Entry(contenedor, opciones)

Cuadro para introducción de texto. Hace uso de las mismas opciones que Label.

