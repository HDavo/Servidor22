# Ejemplo de lanzamiento de excepciones.
# Con raise se puede personalizar el mensaje a mostrar si se da la excepción

def notas(cosa):
    if cosa<0 or cosa>10:
        raise ValueError("Has introducido un valor no aceptado")
    
    if cosa<5:
        print("Has suspendido")
    elif cosa==5:
        print("Has aprobado por los pelos")
    elif 5.5<cosa<7:
        print("Tienes un bien.")
    elif 7.1<cosa<8.7:
        print("Tienes un notable")
    elif 8.7<cosa<10:
        print("Tienes un sobresaliente")

notas(8)
notas(-1)