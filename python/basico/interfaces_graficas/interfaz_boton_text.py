# ejemplo de uso de text y de button (hecho sobre la base del ejemplo de entry)
from tkinter import *

raiz = Tk()

raiz.title("Interfaz con entry")

miFrame = Frame(raiz, width=940, height=720)
miFrame.pack()


# añadido en este ejemplo

minombre = StringVar() # definimos esta variable como tipo string

cuadroNombre = Entry(miFrame, textvariable=minombre) # textvariable asocia el cuadro de texto a la variable indicada

cuadroNombre.grid(row=0, column=1, padx=10, pady=10) # hace lo mismo que pack y adapta el tamaño del contenedor al contenido
cuadroNombre.config(fg="red", justify="right")

cuadroPasswd = Entry(miFrame)
cuadroPasswd.grid(row=1, column=1, padx=10, pady=10)
cuadroPasswd.config(show="*") # show hace que se cambien los caracteres escritos por el caracter elegido

cuadroApellido = Entry(miFrame)
cuadroApellido.grid(row=2, column=1, padx=10, pady=10)

cuadroDireccion = Entry(miFrame)
cuadroDireccion.grid(row=3, column=1, padx=10, pady=10)

#a partir de aqui es lo añadido en este ejemplo

cuadroComentario = Text(miFrame, width=20, height=8) # text tiene scroll por defecto, (funciona como un textarea) pero la barra debe agregarse de manera manual con un objeto de tipo scrollbar
cuadroComentario.grid(row=4, column=1, padx=10, pady=10) 

# además de crearla la barra, debemos colocarla para que salga en la posición deseada
barraVertical = Scrollbar(miFrame, command=cuadroComentario.yview) # yview para que sea vertical
barraVertical.grid(row=4, column=2, sticky="nsew")
cuadroComentario.config(yscrollcommand=barraVertical.set) # con set indica la posicón en la que encontramos (en el caso de linux también hace que sirva para poner el contenido, sin ello no lo hacía)

# por defecto el texto de los labels está alineado al centro para cambiarlo se debe hacer uso de la propiedad sticky.
# Sticky establece las posiciones mediante el uso de los puntos cardinales. Admite los puntos intermedios (nw,se,ne,sw,nw)
# padx (padding horizontal) // pady (padding vertical). Medido en píxeles.

nombreLabel = Label(miFrame, text="Nombre: ")
nombreLabel.grid(row=0, column=0, sticky="w", padx=10, pady=10)

passwdLabel = Label(miFrame, text="Contraseña: ")
passwdLabel.grid(row=1, column=0, sticky="w", padx=10, pady=10)

apellidoLabel = Label(miFrame, text="Apellido: ")
apellidoLabel.grid(row=2, column=0, sticky="w", padx=10, pady=10)

direccionLabel = Label(miFrame, text="Dirección: ")
direccionLabel.grid(row=3, column=0, sticky="w", padx=10, pady=10)


# desde aqui agreado en este ejemplo
comentariosLabel = Label(miFrame, text="Comentarios: ")
comentariosLabel.grid(row=4, column=0, sticky="w", padx=10, pady=10)


def codigoBoton():
    minombre.set("Pepe")

botonEnviar = Button(raiz, text="Enviar", command=codigoBoton) # command es lo que hace que el botón ejecute una acción
botonEnviar.pack()

raiz.mainloop()