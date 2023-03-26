# Se usa en el caso de tener operaciones sencillas (sin bucles dentro ni condicionales), puede sustituir dentro de este supuesto a otro tipo de funciones

""" 
Son funciones anónimas, usadas para cálculos y similares.
También llamadas on the go, on demand u online.
"""

# como se haría sin usar funciones lambda
""" def area_triangulo(base, altura):
    
    return (base*altura)/2

triangulo_1 = area_triangulo(5,7)

triangulo_2 = area_triangulo(4,3)

print(triangulo_1)
print(triangulo_2)
"""

# como se hace usando funciones lambda

area_triangulo = lambda base, altura: (base*altura)/2 # los : son el return de una función normal


triangulo_1 = area_triangulo(5,7)

triangulo_2 = area_triangulo(4,3)


print(triangulo_1)

print(triangulo_2)

sacar_cubo = lambda numero: numero**3

# sacar_cubo = lambda numero: pow(numero, 3)

resultado = sacar_cubo(3)

print(f"El resultado de elevar al cubo es: ", resultado)
