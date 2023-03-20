# ejemplo de uso de entry y de opciones como grid para colocar los elementos

from tkinter import *

raiz = Tk()

raiz.title("Interfaz con entry")

miFrame = Frame(raiz, width=940, height=720)
miFrame.pack()

cuadroNombre = Entry(miFrame)
# cuadroTexto.place(x=100, y=100)
cuadroNombre.grid(row=0, column=1, padx=10, pady=10) # hace lo mismo que pack y adapta el tamaño del contenedor al contenido
cuadroNombre.config(fg="red", justify="right")

cuadroPasswd = Entry(miFrame)
cuadroPasswd.grid(row=1, column=1, padx=10, pady=10)
cuadroPasswd.config(show="*") # show hace que se cambien los caracteres escritos por el caracter elegido

cuadroApellido = Entry(miFrame)
cuadroApellido.grid(row=2, column=1, padx=10, pady=10)

cuadroDireccion = Entry(miFrame)
cuadroDireccion.grid(row=3, column=1, padx=10, pady=10)

# por defecto el texto de los labels está alineado al centro para cambiarlo se debe hacer uso de la propiedad sticky.
# Sticky establece las posiciones mediante el uso de los puntos cardinales. Admite los puntos intermedios (nw,se,ne,sw,nw)
# padx (padding horizontal) // pady (padding vertical). Medido en píxeles.

nombreLabel = Label(miFrame, text="Nombre: ")
# nombreLabel.place(x=100, y=100) # puede ponerse al lado del cuadro de texto de esta manera pero no es recomendable. Es mejor grid
nombreLabel.grid(row=0, column=0, sticky="w", padx=10, pady=10)

passwdLabel = Label(miFrame, text="Contraseña: ")
passwdLabel.grid(row=1, column=0, sticky="w", padx=10, pady=10)

apellidoLabel = Label(miFrame, text="Apellido: ")
apellidoLabel.grid(row=2, column=0, sticky="w", padx=10, pady=10)

direccionLabel = Label(miFrame, text="Direccion de trabajo: ")
direccionLabel.grid(row=3, column=0, sticky="w", padx=10, pady=10)


raiz.mainloop()