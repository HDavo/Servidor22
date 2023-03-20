# ejemplo de uso de text y de button (hecho sobre la base del ejemplo de entry)
from tkinter import *

raiz = Tk()

raiz.title("Interfaz con entry")

mi_frame = Frame(raiz, width=940, height=720)
mi_frame.pack()


# añadido en este ejemplo

mi_nombre = StringVar() # definimos esta variable como tipo string

cuadro_nombre = Entry(mi_frame, textvariable=mi_nombre) # textvariable asocia el cuadro de texto a la variable indicada
cuadro_nombre.grid(row=0, column=1, padx=10, pady=10) # hace lo mismo que pack y adapta el tamaño del contenedor al contenido
cuadro_nombre.config(fg="red", justify="right")

cuadro_passwd = Entry(mi_frame)
cuadro_passwd.grid(row=1, column=1, padx=10, pady=10)
cuadro_passwd.config(show="*") # show hace que se cambien los caracteres escritos por el caracter elegido

cuadro_apellido = Entry(mi_frame)
cuadro_apellido.grid(row=2, column=1, padx=10, pady=10)

cuadro_direccion = Entry(mi_frame)
cuadro_direccion.grid(row=3, column=1, padx=10, pady=10)

#a partir de aqui es lo añadido en este ejemplo

cuadro_comentario = Text(mi_frame, width=20, height=8) # text tiene scroll por defecto, (funciona como un textarea) pero la barra debe agregarse de manera manual con un objeto de tipo scrollbar
cuadro_comentario.grid(row=4, column=1, padx=10, pady=10) 

# además de crearla la barra, debemos colocarla para que salga en la posición deseada
barra_vertical = Scrollbar(mi_frame, command=cuadro_comentario.yview) # yview para que sea vertical
barra_vertical.grid(row=4, column=2, sticky="nsew")
cuadro_comentario.config(yscrollcommand=barra_vertical.set) # con set indica la posicón en la que encontramos (en el caso de linux también hace que sirva para poner el contenido, sin ello no lo hacía)

# por defecto el texto de los labels está alineado al centro para cambiarlo se debe hacer uso de la propiedad sticky.
# Sticky establece las posiciones mediante el uso de los puntos cardinales. Admite los puntos intermedios (nw,se,ne,sw,nw)
# padx (padding horizontal) // pady (padding vertical). Medido en píxeles.

nombre_label = Label(mi_frame, text="Nombre: ")
nombre_label.grid(row=0, column=0, sticky="w", padx=10, pady=10)

passwd_label = Label(mi_frame, text="Contraseña: ")
passwd_label.grid(row=1, column=0, sticky="w", padx=10, pady=10)

apellido_label = Label(mi_frame, text="Apellido: ")
apellido_label.grid(row=2, column=0, sticky="w", padx=10, pady=10)

direccion_label = Label(mi_frame, text="Dirección: ")
direccion_label.grid(row=3, column=0, sticky="w", padx=10, pady=10)


# desde aqui agreado en este ejemplo
comentarios_label = Label(mi_frame, text="Comentarios: ")
comentarios_label.grid(row=4, column=0, sticky="w", padx=10, pady=10)


def codigo_boton():
    mi_nombre.set("Pepe")

boton_enviar = Button(raiz, text="Enviar", command=codigo_boton) # command es lo que hace que el botón ejecute una acción
boton_enviar.pack()

raiz.mainloop()