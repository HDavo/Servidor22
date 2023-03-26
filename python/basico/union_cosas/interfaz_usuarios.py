from tkinter import *
from tkinter import messagebox
import sqlite3
# import bbdd_interfaz, funcionalidad

#---------------------Funcionalidad-----------------------------------
# mirar si es posible ponerlo dentro de otro fichero sin que ocurra una importación circular

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
    
    # mi_cursor.executemany("INSERT INTO datos_usuarios VALUES (null,?,?,?,?,?)", variable_nombre.get(), variable_passwd.get(), variable_apellido.get(), variable_direccion.get(), cuadro_comentarios.get("1.0", END)) #esta linea no funciona de esta manera
    
    mi_conexion.commit()
    
    
    messagebox.showinfo("BBDD", "Registro insertado con éxito")
    # mi_cursor.executemany("INSERT INTO productos VALUES (?,?,?,?)", productos) 

def salir_aplicacion():
    valor = messagebox.askquestion("Salir", "¿Deseas salir de la aplicación?")
     
    if valor == "yes":
       raiz.destroy() # de momento dentro del mismo archivo porque necesita raiz
       
       
       
def limpieza_campos():
    # para los entry se puede hacer de esta manera (siempre se debe aplicar set sobre la variable definida NUNCA SOBRE EL CAMPO)
    variable_id.set("")
    variable_nombre.set("")
    variable_passwd.set("")
    variable_apellido.set("")
    variable_direccion.set("")
    
    
    # para el campo de tipo text se debe hacer de la siguiente manera
    cuadro_comentarios.delete(1.0, END) # esto significa que dentro del campo texto, borramos desde el primer caracter ala último que haya
    
    

raiz = Tk()

raiz.title("Interfaz de usuarios")


#---------------------Construcción de la barra de menú-----------------------------------
# menú y opciones

barra_menu = Menu(raiz)
raiz.config(menu=barra_menu, width=400, height=400)

menu_bbdd = Menu(barra_menu, tearoff=0)
menu_bbdd.add_command(label="Conectar", command=conexion_bbdd)
menu_bbdd.add_command(label="Salir", command=salir_aplicacion)

menu_borrar = Menu(barra_menu, tearoff=0)
menu_borrar.add_command(label="Borrar campos", command=limpieza_campos)

menu_crud = Menu(barra_menu, tearoff=0)
menu_crud.add_command(label="Crear", command=crear)
menu_crud.add_command(label="Leer")
menu_crud.add_command(label="Actualizar")
menu_crud.add_command(label="Borrar")

menu_ayuda = Menu(barra_menu, tearoff=0)
menu_ayuda.add_command(label="Licencia")
menu_ayuda.add_command(label="Acerca de") # esto debe abrir una ventan emergente


# sin esto los elementos anteriores no se incrustan dentro de la parte de menú
barra_menu.add_cascade(label="BBDD", menu=menu_bbdd)
barra_menu.add_cascade(label="Borrar", menu=menu_borrar)
barra_menu.add_cascade(label="CRUD", menu=menu_crud)
barra_menu.add_cascade(label="Ayuda", menu=menu_ayuda)


#---------------------Comienzo de los campos-----------------------------------

# variables que vamos a usar para los distintos campos

variable_id = IntVar()
variable_nombre = StringVar()
variable_passwd = StringVar()
variable_apellido = StringVar()
variable_direccion = StringVar()
# se debe hacer para los de tipo entry, por eso no se pone una variable para los comentarios

# definición del primer frame (contiene los labels y los diferentes inputs)
mi_frame = Frame(raiz, width=720, height=410)
mi_frame.pack()

# labels de inputs
id_label = Label(mi_frame, text="Id: ")
id_label.grid(row=0, column=0)

nombre_label = Label(mi_frame, text="Nombre: ")
nombre_label.grid(row=1, column=0)

passwd_label =  Label(mi_frame, text="Password: ")
passwd_label.grid(row=2, column=0)

apellido_label = Label(mi_frame, text="Apellido: ")
apellido_label.grid(row=3, column=0)

direccion_label = Label(mi_frame, text="Dirección: ")
direccion_label.grid(row=4, column=0)

comentarios_label = Label(mi_frame, text="Comentarios: ")
comentarios_label.grid(row=5, column=0)


# inputs o Entry

cuadro_id = Entry(mi_frame, textvariable=variable_id)
cuadro_id.grid(row=0, column=1, padx=10, pady=10)
cuadro_id.config(fg="red", justify="center")

cuadro_nombre = Entry(mi_frame, textvariable=variable_nombre)
cuadro_nombre.grid(row=1, column=1, padx=10, pady=10)

cuadro_passwd = Entry(mi_frame, textvariable=variable_passwd)
cuadro_passwd.grid(row=2, column=1, padx=10, pady=10)
cuadro_passwd.config(show="*")

cuadro_apellido = Entry(mi_frame, textvariable=variable_apellido)
cuadro_apellido.grid(row=3, column=1, padx=10, pady=10)

cuadro_direccion = Entry(mi_frame, textvariable=variable_direccion)
cuadro_direccion.grid(row=4, column=1, padx=10, pady=10)

cuadro_comentarios = Text(mi_frame, width=20, height=5)
cuadro_comentarios.grid(row=5, column=1, padx=10, pady=10)
scroll_vertical = Scrollbar(mi_frame, command=cuadro_comentarios.yview)
scroll_vertical.grid(row=5, column=2, sticky="nsew")
cuadro_comentarios.config(yscrollcommand=scroll_vertical.set)


#---------------------Construcción de los botones-----------------------------------

# frame para los botones
otro_frame = Frame(raiz)
otro_frame.pack()

# botones
boton_create = Button(otro_frame, text="Create", command=crear)
boton_create.grid(row=0, column=0, sticky="e", padx=10, pady=10)

boton_read = Button(otro_frame, text="Read")
boton_read.grid(row=0, column=1, sticky="e", padx=10, pady=10)

boton_update = Button(otro_frame, text="Update")
boton_update.grid(row=0, column=2, sticky="e", padx=10, pady=10)

boton_delete = Button(otro_frame, text="Delete")
boton_delete.grid(row=0, column=3, sticky="e", padx=10, pady=10)

raiz.mainloop()