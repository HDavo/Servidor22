# ejemplo de uso de entry y de opciones como grid para colocar los elementos

from tkinter import *

raiz = Tk()

raiz.title("Interfaz con entry")

mi_frame = Frame(raiz, width=940, height=720)
mi_frame.pack()

cuadro_nombre = Entry(mi_frame)
# cuadroTexto.place(x=100, y=100)
cuadro_nombre.grid(row=0, column=1, padx=10, pady=10) # hace lo mismo que pack y adapta el tamaño del contenedor al contenido
cuadro_nombre.config(fg="red", justify="right")

cuadro_passwd = Entry(mi_frame)
cuadro_passwd.grid(row=1, column=1, padx=10, pady=10)
cuadro_passwd.config(show="*") # show hace que se cambien los caracteres escritos por el caracter elegido

cuadro_apellido = Entry(mi_frame)
cuadro_apellido.grid(row=2, column=1, padx=10, pady=10)

cuadro_direccion = Entry(mi_frame)
cuadro_direccion.grid(row=3, column=1, padx=10, pady=10)

# por defecto el texto de los labels está alineado al centro para cambiarlo se debe hacer uso de la propiedad sticky.
# Sticky establece las posiciones mediante el uso de los puntos cardinales. Admite los puntos intermedios (nw,se,ne,sw,nw)
# padx (padding horizontal) // pady (padding vertical). Medido en píxeles.

nombre_label = Label(mi_frame, text="Nombre: ")
# nombre_label.place(x=100, y=100) # puede ponerse al lado del cuadro de texto de esta manera pero no es recomendable. Es mejor grid
nombre_label.grid(row=0, column=0, sticky="w", padx=10, pady=10)

passwd_label = Label(mi_frame, text="Contraseña: ")
passwd_label.grid(row=1, column=0, sticky="w", padx=10, pady=10)

apellido_label = Label(mi_frame, text="Apellido: ")
apellido_label.grid(row=2, column=0, sticky="w", padx=10, pady=10)

direccion_label = Label(mi_frame, text="Direccion de trabajo: ")
direccion_label.grid(row=3, column=0, sticky="w", padx=10, pady=10)


raiz.mainloop()