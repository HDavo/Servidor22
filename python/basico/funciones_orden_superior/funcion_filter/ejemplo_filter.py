# típico de programación funcional



"""
Verifica que los elementos de una secuencia cumplen una condición,
devolviendo un iterador con los elementos que cumplen dicha condición.
Se usa casi siempre con objetos.

# filter recibe dos argumentos: el primero es la función y el segundo es el objeto iterable con el que queremos usar la función. Devuelve un objeto.
"""

# ejemplo sobre una función normal
""" def numero_par(num):
    if num % 2 == 0:
        return True


numeros =[17,24,56,45,12,2]

print(list(filter(numero_par, numeros))) """

# Filter junto a una función lambda

numero_par = lambda num: num%2 == 0

numeros =[17,24,56,45,12,2]

resultado = list(filter(numero_par, numeros))

print(resultado)