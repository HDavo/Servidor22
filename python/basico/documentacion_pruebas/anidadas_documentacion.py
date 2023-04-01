import math, doctest

""" En el caso de tener que usar expresiones anidadas dentro de un test de documentación.
Se siguen los pasos anteriores y el código que debe ir anidado se indica mediante
el uso de ... 
Al igual que el resto de casos de pruebas, debemos especificar el resultado esperado al aplicar la función.
Debiendo tener en cuenta el tipo de variable que devuelve la función usado y otros aspectos mencionados en los
ficheros anteriores.


Dentro de este tipo de pruebas puede indicarse el tipo de excepciones que esperamos que ocurra al ejecutar un código,
para ello es necesario realizar una prueba en donde se contemple este supuesto.
Para este supuesto también deben usarse los ... (mirar el ejemplo de lista_neg dentro de las pruebas).
En este tipo de casos es importante copiar la primera y la última línea, ya que el resto de líneas pueden cambiar en función de los valores enviados, entre estas dos líneas colocar (...).


(...) puede usarse para indicar identación dentro del código
o bien para indicar una parte del código que puede variar (como comodín) -> IMP para uso de errores/excepciones dentro de las pruebas.

"""

def raiz_cuadrada(lista_numeros):
    
    """
    Esta función devuelve una lista con la raíz cuadrada 
    de los elementos númericos recibidos y pasados como 
    parámetro en otra lista.
    
    >>> lista = []
    >>> for i in [4,9,16]:
    ...     lista.append(i)
    >>> raiz_cuadrada(lista)
    [2.0, 3.0, 4.0]
    
    >>> lista_neg = []
    >>> for i in [9,16,25]:
    ...     lista_neg.append(i)
    >>> raiz_cuadrada(lista_neg)
    Traceback (most recent call last):
        ...                     
    ValueError: math domain error
    """
    
    return [math.sqrt(n) for n in lista_numeros]

numeros = [81,9,27,45,144,121,16]

# print(raiz_cuadrada(numeros))

doctest.testmod()