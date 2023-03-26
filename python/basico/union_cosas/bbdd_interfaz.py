import sqlite3
from tkinter import messagebox

# cuando se sepa solucionar la importación circular pasar todas las funciones de bbdd a este fichero

#---------------------Conexión BBDD-----------------------------------
def conexion_bbdd():
    # mi_conexion = sqlite3.connect("./python/basico/union_cosas/usuarios") 
    """  esta línea funciona en el ordenador principal pero no dentro de la máquina.
    Sin poner la ruta de esta manera crea la bbdd dentro de la carpeta raiz abierta dentro del editor.
    """

    mi_conexion = sqlite3.connect("usuarios") # dentro de la máquina crea la base de datos dentro del directorio donde están el resto de ficheros
    
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
    
def crear():
    mi_conexion = sqlite3.connect("usuarios")
    
    mi_cursor=mi_conexion.cursor()
    
    
    #  mi_cursor.execute("INSERT INTO datos_usuarios VALUES (null,?,?,?,?,?)", variable_nombre.get(), variable_passwd.get(), variable_apellido.get(), variable_direccion.get(), cuadro_comentarios.get("1.0", END))
    
    mi_conexion.commit()
    
    
    messagebox.showinfo("BBDD", "Registro insertado con éxito")
    # mi_cursor.executemany("INSERT INTO productos VALUES (?,?,?,?)", productos) 