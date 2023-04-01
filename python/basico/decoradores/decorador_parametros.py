""" creación de la función decorador con parámetros.
Debe indicarse dentro de la función interior y en la función recibida que se van a recibir parámetros, es recomendable hacerlo con: 
*args si el número de variables puede variar, ya que indica que recibe un número indeterminado de argumentos.
**kwargs (argumentos clave valor): 
"""

def funcion_decoradora(recibida):

    def funcion_interior(*args, **kwargs): # *args esto le indica a una función que puede recibir un número indeterminado de parámetros
        
        # Las acciones que va a permitir el uso de este decorador dentro de otras funciones
        
        print("Antes de hacer los cálculos")
        recibida(*args, **kwargs)
        
        # Otras acciones que se ponen gracias al decorador
        print("Final de los cálculos\n")
        
        
    return funcion_interior # este return pertenece a la primera función SIEMPRE, nunca a la interior


@funcion_decoradora # esto hace que la función suma incorpore las funciones definidas dentro del decorador, siempre en esta posición
def suma(num1, num2):
    print(num1+num2)
    
@funcion_decoradora
def resta(num1, num2):
    print(num1-num2)
    
@funcion_decoradora
def potencia(base, exponente):
    print(pow(base, exponente))
    
    
suma(12,15)

resta(59,45)

potencia(base=5, exponente=3) # en este tipo es cuando debe ponerse **kwargs