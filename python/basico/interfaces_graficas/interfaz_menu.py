
from tkinter import *

raiz = Tk()

barra_menu = Menu(raiz)
raiz.config(menu=barra_menu, width=400, height=400)

# se definen las opciones que tendrá el menú
    #por defecto las opciones de menú tienen un elemento de relleno para eliminarlo se debe añadir tearoff=0
    
archivo_menu= Menu(barra_menu, tearoff=0)
archivo_edicion= Menu(barra_menu, tearoff=0)
archivo_herramientas= Menu(barra_menu, tearoff=0)
archivo_ayuda= Menu(barra_menu, tearoff=0)

# para añadir subopciones 

archivo_menu.add_command(label="Nuevo")
archivo_menu.add_command(label="Guardar")
archivo_menu.add_command(label="Guardar como")

archivo_menu.add_separator() # para añadir una barra separadora de elementos dentro del submenu, se debe colocar en la posición deseada entre las opciones dentro del código

archivo_menu.add_command(label="Cerrar")
archivo_menu.add_command(label="Salir")


# mas subopciones dentro de edicion
archivo_edicion.add_command(label="Copiar")
archivo_edicion.add_command(label="Cortar")
archivo_edicion.add_command(label="Pegar")
archivo_edicion.add_command(label="Buscar")


# subopciones dentro de ayuda
archivo_ayuda.add_command(label="Licencia")
archivo_ayuda.add_command(label="Acerca de")
archivo_ayuda.add_command(label="Versión")


# para añadir las diferentes opciones dentro de la barra de menú que hemos definido previamente
barra_menu.add_cascade(label="Archivo", menu=archivo_menu)
barra_menu.add_cascade(label="Edición", menu=archivo_edicion)
barra_menu.add_cascade(label="Herramientas", menu=archivo_herramientas)
barra_menu.add_cascade(label="Ayuda", menu=archivo_ayuda)


raiz.mainloop()