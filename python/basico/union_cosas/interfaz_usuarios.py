from tkinter import *

raiz = Tk()

raiz.title("Interfaz de usuarios")

mi_frame = Frame(raiz, width=250, height=410)
mi_frame.pack()

# variables que vamos a usar

variable_id = IntVar()
variable_nombre = StringVar()
variable_passwd = StringVar()
variable_apellido = StringVar()
variable_direccion = StringVar()
variable_comentarios = StringVar()

# labels
id_label = Label(mi_frame, text="Id: ")
id_label.grid(row=0, column=0, columnspan=2)

nombre_label = Label(mi_frame, text="Nombre: ")
nombre_label.grid(row=1, column=0, columnspan=2)

passwd_label =  Label(mi_frame, text="Password: ")
passwd_label.grid(row=2, column=0, columnspan=2)

apellido_label = Label(mi_frame, text="Apellido: ")
apellido_label.grid(row=3, column=0, columnspan=2)

direccion_label = Label(mi_frame, text="Dirección: ")
direccion_label.grid(row=4, column=0, columnspan=2)

comentarios_label = Label(mi_frame, text="Comentarios: ")
comentarios_label.grid(row=5, column=0, columnspan=2)


# inputs

cuadro_id = Entry(mi_frame)
cuadro_id.grid(row=0, column=2, columnspan=2)

cuadro_nombre = Entry(mi_frame)
cuadro_nombre.grid(row=1, column=2, columnspan=2)

cuadro_passwd = Entry(mi_frame)
cuadro_passwd.config(show="*")
cuadro_passwd.grid(row=2, column=2, columnspan=2)

cuadro_apellido = Entry(mi_frame)
cuadro_apellido.grid(row=3, column=2, columnspan=2)

cuadro_direccion = Entry(mi_frame)
cuadro_direccion.grid(row=4, column=2, columnspan=2)

cuadro_comentarios = Entry(mi_frame)
cuadro_comentarios.grid(row=5, column=2, columnspan=2)




# botones

boton_create = Button(mi_frame, text="Create").pack()
boton_read = Button(mi_frame, text="Read").pack()
boton_update = Button(mi_frame, text="Update").pack()
boton_delete = Button(mi_frame, text="Delete").pack()


raiz.mainloop()