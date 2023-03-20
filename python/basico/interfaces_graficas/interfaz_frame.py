import tkinter as tk 
from tkinter import *

raiz=tk.Tk()


# para definir el título de la ventana
raiz.title("Ventana con frame")

# para personalizar la imagen de la barra del título y de la barra de herramientas
raiz.iconphoto(False, tk.PhotoImage(file="python/basico/interfaces_graficas/img/logo.png")) # esto funciona con ruta absoluta o con relativa



# para otras cosas como poner el color de fondo de la ventana (mirar otras cosas que se pueden cambiar)

raiz.config(bg="grey")

mi_frame = Frame()

# mi_frame.pack(side="left", anchor="n") # con side y anchor se establece la posición del frame

# para rellenar con el frame
# mi_frame.pack(fill="x") # para rellenar de manera horizontal
mi_frame.pack(fill="y", expand=True) # para rellenar/expandir de manera vertical

# mi_frame.pack(fill="both", expand=True) # para expandir en varias direcciones


# las modificaciones hechas con config son también aplicables a la raiz
# para añadir marcos al frame
mi_frame.config(bd=10)
mi_frame.config(relief="groove")

# para cambiar el icono del ratón dentro del frame
mi_frame.config(cursor="pirate")

mi_frame.config(bg="red")

# una vez se tiene un frame el tamaño mínimo y por defecto de la ventana viene marcado por el frame y no es necesario ponerle un tamaño. Al ampliar se pueden diferenciar el frame y el contenedor

mi_frame.config(width="320", height="320")


raiz.mainloop() # siempre debe estar al final del código

""" Para que la ventana o programa creado, se ejecuten solo como una ventana, es decir, sin abrir una terminal.
Es necesario cambiar la extensión del fichero a pyw """