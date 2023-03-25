import sqlite3
from tkinter import messagebox

#---------------------Conexión BBDD-----------------------------------
def conexion_bbdd():
    mi_conexion = sqlite3.connect("python/basico/union_cosas/usuarios")
    
    mi_cursor = mi_conexion.cursor()
    
    try:
        mi_cursor.execute('''
        CREATE TABLE datos_usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre_usuario VARCHAR(50),
        passwd VARCHAR(50),
        apellido VARCHAR(50),
        direccion VARCHAR(50),
        comentarios VARCHAR(255))
        ''')
    
        return messagebox.showinfo("BBDD", "BBDD creada con éxito")
    except:
        return messagebox.showwarning("¡Atención!", "La BDDD ya existe")