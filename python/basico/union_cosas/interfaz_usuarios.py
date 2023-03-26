from tkinter import *
from tkinter import messagebox
import sqlite3
# import bbdd_interfaz, funcionalidad

#---------------------Funcionalidad-----------------------------------
# mirar si es posible ponerlo dentro de otro fichero sin que ocurra una importación circular

#---------------------Operaciones BBDD-----------------------------------

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

#Función para crear registros dentro de la bbdd
    
def crear():

    mi_conexion = sqlite3.connect("usuarios")
    
    mi_cursor=mi_conexion.cursor()
    
    datos = [
        variable_nombre.get(),
        variable_passwd.get(),
        variable_apellido.get(),
        variable_direccion.get(),
        cuadro_comentarios.get("1.0", END)
    ]
    
    mi_cursor.execute(
        """
        INSERT INTO datos_usuarios(
            nombre_usuario,
            passwd,
            apellido,
            direccion,
            comentarios
        )VALUES(?,?,?,?,?)
        """, datos
    )
    
    
    mi_conexion.commit()
    
    messagebox.showinfo("BBDD", "Registro insertado con éxito")
    # mi_cursor.executemany("INSERT INTO productos VALUES (?,?,?,?)", productos) 
    
    
# función para poder recuperar los datos y rellenar con la información recogida los diferentes inputs

def lectura_informacion():
    
    mi_conexion = sqlite3.connect("usuarios")

    mi_cursor=mi_conexion.cursor()
    
    # mi_cursor.execute("SELECT * FROM datos_usuarios WHERE id=?", variable_id.get())
    mi_cursor.execute("SELECT * FROM datos_usuarios WHERE id=" + str(variable_id.get())) # sin str da error por tipo de variable no concatenable, al tratarlo como un int
    
    usuario_obtenido = mi_cursor.fetchall()
    
    for usuario in usuario_obtenido:
        variable_id.set(usuario[0])
        variable_nombre.set(usuario[1])
        variable_passwd.set(usuario[2])
        variable_apellido.set(usuario[3])
        variable_direccion.set(usuario[4])
        cuadro_comentarios.insert(1.0, usuario[5])
    
    mi_conexion.commit()
        
        
# Función para poder usar las funciones de update de la interfaz

def actualizar_registro():
    mi_conexion = sqlite3.connect("usuarios")
    
    mi_cursor=mi_conexion.cursor()
    
    # intentar parametrizar la consulta, de momento da error
    """ datos = [
        variable_nombre.get(),
        variable_passwd.get(),
        variable_apellido.get(),
        variable_direccion.get(),
        cuadro_comentarios.get("1.0", END),
        variable_id.get()
    ]
    
    consulta = "UPDATE datos_usuarios set nombre_usuario=%s, passwd=%s, apellido=%s, direccion=%s, comentarios=%s WHERE id=%s"
    
    mi_cursor.executemany(consulta, datos) """
    
    datos = str(variable_nombre.get()),str(variable_passwd.get()),str(variable_apellido.get()),str(variable_direccion.get()),str(cuadro_comentarios.get("1.0", END))
    
    """ 
    mi_cursor.execute("UPDATE datos_usuarios SET nombre_usuario='" + str(variable_nombre.get()) +
        "', passwd='" + str(variable_passwd.get()) +
        "', apellido='" + str(variable_apellido.get()) +
        "', direccion='" + str(variable_direccion.get()) +
        "', comentarios='" + str(cuadro_comentarios.get("1.0", END)) +
        "' WHERE id=" + str(variable_id.get()))
    """
    
    mi_cursor.execute("UPDATE datos_usuarios SET nombre_usuario=?,passwd=?, apellido=?, direccion=?, comentarios=? "+
    "WHERE id=" + str(variable_id.get()), (datos)                      
    )
    
    mi_conexion.commit()
    
    messagebox.showinfo("BBDD", "Registro actualizado con éxito")
    # mi_cursor.executemany("INSERT INTO productos VALUES (?,?,?,?)", productos) 
    
# Función para poder borrar registros de la bbdd usando los botones correspondientes
    
def eliminar_registro():
    
    mi_conexion = sqlite3.connect("usuarios")
    
    mi_cursor=mi_conexion.cursor()
    
    mi_cursor.execute("DELETE FROM datos_usuarios WHERE id=" + str(variable_id.get()))
    
    mi_conexion.commit()
    
    messagebox.showinfo("BBDD", "Registro borrado con éxito")

#---------------------Funciones (no BBDD)-----------------------------------
# Función para hacer funcionar la opción salir del menú

def salir_aplicacion():
    valor = messagebox.askquestion("Salir", "¿Deseas salir de la aplicación?")
     
    if valor == "yes":
       raiz.destroy() # de momento dentro del mismo archivo porque necesita raiz y se incurre en importación circular
       
       
    
# Función para borrar los campos. Dar funcionalidad a la función borrar campos del menú Borrar
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
menu_crud.add_command(label="Leer", command=lectura_informacion)
menu_crud.add_command(label="Actualizar", command=actualizar_registro)
menu_crud.add_command(label="Borrar", command=eliminar_registro)

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

boton_read = Button(otro_frame, text="Read", command=lectura_informacion)
boton_read.grid(row=0, column=1, sticky="e", padx=10, pady=10)

boton_update = Button(otro_frame, text="Update", command=actualizar_registro)
boton_update.grid(row=0, column=2, sticky="e", padx=10, pady=10)

boton_delete = Button(otro_frame, text="Delete", command=eliminar_registro)
boton_delete.grid(row=0, column=3, sticky="e", padx=10, pady=10)

raiz.mainloop()