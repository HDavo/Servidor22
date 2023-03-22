from tkinter import *
from tkinter import filedialog # necesario para hacer una ventana para elegir ficheros

raiz=Tk()

def abre_fichero():
    fichero = filedialog.askopenfilename(title="Abrir", initialdir="python/basico/interfaces_graficas", filetypes=(("Ficheros de Python", "*.py"),("Ficheros Markdown", "*.md"),("Todos los archivos","*.*"))) # devuelve la ruta del fichero que se seleccione dentro de la ventana emergente
    # filetypes siempre debe ser una tupla para funcionar
    
    print(fichero)
    
Button(raiz, text="Abrir fichero", command=abre_fichero).pack()

raiz.mainloop()