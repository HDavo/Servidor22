""" Para poder usar la documentación para realizar pruebas es necesario seguir un cierto formato dentro de la documentación.
Importar doctest

Dentro del comentario que queremos usar para documentar debemos incluir (podemos poner varios y realizar varias pruebas con la misma función):
    > > > (esto debería ir junto) + nombre de la función a probar con una serie de valores definidos.
    resultado esperado 

poner: doctest.testmod()

Esto puede darnos dos resultados.
    1- Si está todo bien, no saldrá nada en la consola.
    2- Si existe algún error nos lo mostrará, con las diferencias entre el resultado obtenido y el resultado esperado. Debe tenerse en cuenta el tipo de datos para definir el resultado esperado.
    
En el caso de strings debe tenerse en cuenta que Python usa por defecto las comillas simples y que si definimos unas comillas dobles dentro del resultado esperado puede darnos un fallo.
    
"""

import doctest 
    
def area_triangulo(base, altura):
    
    
    """Realiza el cálculo del área un triángulo.

    >>> area_triangulo(4,8)
    'El área del triángulo es: 16.0'
    
    
    >>> area_triangulo(3,6)
    'El área del triángulo es: 9.0'
    
    >>> area_triangulo(2,2)
    'El área del triángulo es: 16.0'
    
    """
    
    # return ((base*altura)/2)
    return "El área del triángulo es: " +str((base*altura)/2)

# print(area_triangulo(12,45))

doctest.testmod()