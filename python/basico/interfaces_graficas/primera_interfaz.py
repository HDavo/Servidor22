import tkinter as tk 
from tkinter import *
# import os # se ha usado para comprobar las rutas del fichero y comprobar que se detectaba correctamente ya que con bitmap no iba

# el primer paso es construir la raiz
raiz=tk.Tk()


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
raiz.iconphoto(False, tk.PhotoImage(file="python/basico/interfaces_graficas/img/logo.png")) # esto funciona con ruta absoluta o con relativa

# en windows o versiones anteriores de python deberia funcionar con lo siguiente
# raiz.iconbitmap("python/basico/interfaces_graficas/logo.ico")

# os.system("pwd")
# os.system("ls -al")
# os.system("ls -al ./img/")

# tamaño por defecto de la ventana
raiz.geometry("720x800")

# para otras cosas como poner el color de fondo de la ventana (mirar otras cosas que se pueden cambiar)

raiz.config(bg="grey")



raiz.mainloop() # siempre debe estar al final del código

""" Para que la ventana o programa creado, se ejecuten solo como una ventana, es decir, sin abrir una terminal.
Es necesario cambiar la extensión del fichero a pyw """