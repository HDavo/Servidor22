from tkinter import *
from tkinter import messagebox
import bbdd_interfaz, funcionalidad

#---------------------Funcionalidad-----------------------------------
# mirar si es posible ponerlo dentro de otro fichero sin que ocurra una importación circular

def salir_aplicacion():
    valor = messagebox.askquestion("Salir", "¿Deseas salir de la aplicación?")
     
    if valor == "yes":
       raiz.destroy() # de momento dentro del mismo archivo porque necesita raiz
    

raiz = Tk()

raiz.title("Interfaz de usuarios")


#---------------------Construcción de la barra de menú-----------------------------------
# menú y opciones

barra_menu = Menu(raiz)
raiz.config(menu=barra_menu, width=400, height=400)

menu_bbdd = Menu(barra_menu, tearoff=0)
menu_bbdd.add_command(label="Conectar", command=bbdd_interfaz.conexion_bbdd)
menu_bbdd.add_command(label="Salir", command=salir_aplicacion)

menu_borrar = Menu(barra_menu, tearoff=0)
menu_borrar.add_command(label="Borrar campos")

menu_crud = Menu(barra_menu, tearoff=0)
menu_crud.add_command(label="Crear")
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

cuadro_id = Entry(mi_frame)
cuadro_id.grid(row=0, column=1, padx=10, pady=10)
cuadro_id.config(fg="red", justify="center")

cuadro_nombre = Entry(mi_frame)
cuadro_nombre.grid(row=1, column=1, padx=10, pady=10)

cuadro_passwd = Entry(mi_frame)
cuadro_passwd.grid(row=2, column=1, padx=10, pady=10)
cuadro_passwd.config(show="*")

cuadro_apellido = Entry(mi_frame)
cuadro_apellido.grid(row=3, column=1, padx=10, pady=10)

cuadro_direccion = Entry(mi_frame)
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
boton_create = Button(otro_frame, text="Create")
boton_create.grid(row=0, column=0, sticky="e", padx=10, pady=10)

boton_read = Button(otro_frame, text="Read")
boton_read.grid(row=0, column=1, sticky="e", padx=10, pady=10)

boton_update = Button(otro_frame, text="Update")
boton_update.grid(row=0, column=2, sticky="e", padx=10, pady=10)

boton_delete = Button(otro_frame, text="Delete")
boton_delete.grid(row=0, column=3, sticky="e", padx=10, pady=10)

raiz.mainloop()