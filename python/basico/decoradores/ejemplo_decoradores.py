# creación de la función decorador

def funcion_decoradora(recibida):

    def funcion_interior():
        
        # Las acciones que va a permitir el uso de este decorador dentro de otras funciones
        
        print("Antes de hacer los cálculos")
        recibida()
        
        # Otras acciones que se ponen gracias al decorador
        print("Final de los cálculos")
        
        
    return funcion_interior # este return pertenece a la primera función SIEMPRE, nunca a la interior


@funcion_decoradora # esto hace que la función suma incorpore las funciones definidas dentro del decorador, siempre en esta posición
def suma():
    print(15+2)
    
@funcion_decoradora
def resta():
    print(45-23)
    
    
suma()

resta()