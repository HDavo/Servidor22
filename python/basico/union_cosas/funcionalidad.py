""" from tkinter import messagebox
import interfaz_usuarios

def salir_aplicacion():
    valor = messagebox.askquestion("Salir", "¿Deseas salir de la aplicación?")
     
    if valor == "yes":
       raiz.destroy() # de momento dentro del mismo archivo porque necesita raiz
     """