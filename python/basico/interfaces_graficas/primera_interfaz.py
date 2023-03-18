from tkinter import *

# el primer paso es construir la raiz
raiz=Tk()


# para definir el título de la ventana
raiz.title("Prueba de título")

# de esta manera se bloquea el cambio de tamaño de la ventana por completo
# también puede hacerse mediante el uso e True o False
# raiz.resizable(0,0) 

# para bloquear el cambio del ancho pero no del alto
# raiz.resizable(1,0)


# para bloquear el cambio del alto pero no del ancho
# raiz.resizable(0,1)

# para personalizar la imagen de la barra del título y de la barra de herramientas
raiz.iconbitmap("python/basico/interfaces_graficas/logo.ico")


raiz.mainloop() # siempre debe estar al final del código