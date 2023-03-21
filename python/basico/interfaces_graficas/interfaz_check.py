# para opciones con elección múltiple 
from tkinter import *

cosa=Tk()
cosa.title("Ejemplo de uso de checkbutton")

playa=IntVar()
monte=IntVar()
desierto=IntVar()

def opciones_viaje():
    opcion_elegida=""
    
    if(playa.get()==1):
        opcion_elegida+=" playa"
        
    if(monte.get()==1):
        opcion_elegida+=" montaña"
        
    if(desierto.get()==1):
        opcion_elegida+=" desierto"
    
    texto_final.config(text=opcion_elegida)


mi_frame=Frame(cosa, width="100", height="100").pack()

mi_imagen = PhotoImage(file="python/basico/interfaces_graficas/img/82-200x300.png")
Label(mi_frame, image=mi_imagen).pack()

otro_frame = Frame(cosa, width="100", height="100").pack()
Label(otro_frame, text="Elige destinos: ").pack()

# onvalue (valor cuando está seleccionado) // offvalue (valor cuando no está seleccionado)
Checkbutton(otro_frame, text="Playa", variable=playa, onvalue=1, offvalue=0, command=opciones_viaje).pack()
Checkbutton(otro_frame, text="Montaña", variable=monte, onvalue=1, offvalue=0, command=opciones_viaje).pack()
Checkbutton(otro_frame, text="Desierto", variable=desierto, onvalue=1, offvalue=0, command=opciones_viaje).pack()

texto_final = Label(otro_frame) # en este tipo de casos mejor poner el pack en otroa línea, no hace la funcionalidad esperada si se pone en la misma línea
texto_final.pack()


cosa.mainloop()