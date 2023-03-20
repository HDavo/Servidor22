# ejemplo con label de texto y de imagen

from tkinter import *

root=Tk()

root.title("Interfaz con label")
miFrame=Frame(root, width=500, height=400, bg="grey")

miFrame.pack() # con pack se adapta el contenedor al contenido.

miImagen = PhotoImage(file="python/basico/interfaces_graficas/img/82-200x300.png")

miLabel = Label(miFrame, text="Prueba de texto en un label",fg="blue", font=("Comic Sans MS", 25)).place(x=0,y=0)

otroLabel = Label(miFrame, image=miImagen).place(x=100,y=100)

root.mainloop()