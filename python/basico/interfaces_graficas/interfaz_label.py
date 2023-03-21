# ejemplo con label de texto y de imagen

from tkinter import *

root=Tk()

root.title("Interfaz con label")
mi_frame=Frame(root, width=500, height=400, bg="grey")

mi_frame.pack() # con pack se adapta el contenedor al contenido.

mi_imagen = PhotoImage(file="python/basico/interfaces_graficas/img/82-200x300.png") # aqui se carga la imagen

mi_label = Label(mi_frame, text="Prueba de texto en un label",fg="blue", font=("Comic Sans MS", 25)).place(x=0,y=0)

otro_label = Label(mi_frame, image=mi_imagen).place(x=100,y=100) # esto se hace para poder mostrar la imagen

root.mainloop()