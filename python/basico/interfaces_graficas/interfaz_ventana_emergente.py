# usando la base del fichero interfaz_menu se añaden los elementos necesarios para mostrar ventanas emergentes
from tkinter import *
from tkinter import messagebox # necesario para las ventanas emergentes

raiz = Tk()

# para la ventana emergente


"""
Cada tipo de ventada emergente tiene una serie de elementos propios como un botón, iconos, sonidos. 
En principio los botones son inútiles pero devuelven valores por defecto

Para las funciones usadas a continuaciuón se cumple lo siguiente: 
- primer parámetro: título de la ventana
- segundo parámetro: mensaje dentro de la ventana
 """

def info_adicional():
    messagebox.showinfo("Ejemplo de ventana emergente","Mensaje dentro de la ventana.\nVersión 1.0") 
    
def aviso_licencia():
    messagebox.showwarning("Licencia","Producto con licencia MIT")
    
def salida():
    # messagebox.askquestion("Salir", "¿Está seguro de salir?")
    # valor = messagebox.askquestion("Salir", "¿Está seguro de salir?") # pone botones yes / no dentro de la ventana emergente
    valor = messagebox.askokcancel("Salir", "¿Está seguro de salir?")
    
    """   
    para usar con askquestion
    if valor == "yes":
        raiz.destroy() # esto hace que se cierren las ventanas abiertas
    """
 
    # para asksokcancel, que devuelve boolean
    if valor == True:
        raiz.destroy()

def cerrar_documento():
    valor = messagebox.askretrycancel("Reintentar", "No se puede cerrar mientras no se guarden los progresos")
    # askretrycancel devuelve boolean
    if valor == False:
        raiz.destroy()


barra_menu = Menu(raiz)
raiz.config(menu=barra_menu, width=400, height=400)

# se definen las opciones que tendrá el menú
    #por defecto las opciones de menú tienen un elemento de relleno para eliminarlo se debe añadir tearoff=0
    
archivo_menu= Menu(barra_menu, tearoff=0)
archivo_edicion= Menu(barra_menu, tearoff=0)
archivo_herramientas= Menu(barra_menu, tearoff=0)
archivo_ayuda= Menu(barra_menu, tearoff=0)

# para añadir subopciones, dentro de archivo

archivo_menu.add_command(label="Nuevo")
archivo_menu.add_command(label="Guardar")
archivo_menu.add_command(label="Guardar como")
archivo_menu.add_separator() # para añadir una barra separadora de elementos dentro del submenu, se debe colocar en la posición deseada entre las opciones dentro del código
archivo_menu.add_command(label="Cerrar", command=cerrar_documento)
archivo_menu.add_command(label="Salir", command=salida)


# mas subopciones dentro de edicion
archivo_edicion.add_command(label="Copiar")
archivo_edicion.add_command(label="Cortar")
archivo_edicion.add_command(label="Pegar")
archivo_edicion.add_command(label="Buscar")


# subopciones dentro de ayuda
archivo_ayuda.add_command(label="Licencia", command=aviso_licencia)
archivo_ayuda.add_command(label="Acerca de", command=info_adicional)
archivo_ayuda.add_command(label="Versión")


# para añadir las diferentes opciones dentro de la barra de menú que hemos definido previamente
barra_menu.add_cascade(label="Archivo", menu=archivo_menu)
barra_menu.add_cascade(label="Edición", menu=archivo_edicion)
barra_menu.add_cascade(label="Herramientas", menu=archivo_herramientas)
barra_menu.add_cascade(label="Ayuda", menu=archivo_ayuda)


raiz.mainloop()