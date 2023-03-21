# ejemplo de uso de botones de tipo con tkinter
from tkinter import *

root=Tk()
root.title("Prueba de botones radio")

var_opcion = IntVar()

mi_frame=Frame(root, width="320", height="320").pack()

# mi_frame.config(width="320", height="320")
# mi_frame.pack()

Label(mi_frame, text="Mascota").pack()


def imprimir():
    # print(var_opcion.get()) # sacamos el valor de esta forma y lo muestra en terminal
    if var_opcion.get()==1:
        etiqueta.config(text="Has elegido Perro")
    elif var_opcion.get()==2:
        etiqueta.config(text="Has elegido Gato")
    else:
        etiqueta.config(text="Has elegido Otros")

Radiobutton(root, text="Perro", variable=var_opcion, value=1, command=imprimir).pack()

Radiobutton(root, text="Gato", variable=var_opcion, value=2, command=imprimir).pack()

Radiobutton(root, text="Otros", variable=var_opcion, value=3, command=imprimir).pack()

etiqueta=Label(mi_frame) # en este tipo de casos mejor poner el pack en otroa línea, no hace la funcionalidad esperada si se pone en la misma línea
etiqueta.pack()

root.mainloop()