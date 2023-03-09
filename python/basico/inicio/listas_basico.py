cosa = ['Pepe','Manolo','Juan','Leovigildo'] # declaración de una lista

numeros = [21,12,45,23,24,2,89,5]


print(cosa) # forma más sencilla de imprimir una lista

print(cosa[1]) #para posiciones específicas

print(cosa[-2]) # python admite posiciones negativas, cuenta desde el final de la lista

"""
Uso de [:] 
Permite definir rangos de elementos dentro de una lista, sin afectar a su contenido.
[:] En el caso de no definir un rango y solo poner los dos puntos imprime la lista desde el inicio al final.

[2:5] Imprime el contenido del rango definido, sin incluir el elemento del limite superior
[:3] También funciona poniendo un solo número como rango, interpreta que el otro límite es 0.
[2:] Interpreta que el rango es desde la posición indicada hasta el final

"""

print(cosa[:]) # sin rango
print(cosa[0:3]) # con rango definido completamente
# Ejemplos de rango abreviado
print(cosa[:3]) 
print(cosa[1:])


# Para añadir elementos al final de la lista

cosa.append('Antonio')

print(cosa)

# para elementos en una posición específica

cosa.insert(-3,'Santiago')
print(cosa)

# para añadir múltiples elementos a una lista
cosa.extend(numeros)
print(cosa)

otra = ['Paco','Paca','Ana']
cosa.extend(otra)
print(cosa)





# para saber el indice de un elemento, si está repetido nos devuelve la posición del primer elemento

lugar = cosa.index('Juan')
print(lugar)


# para saber si una lista contiene un elemento, devuelve un boolean

existe = "Alberto" in cosa
print(existe)

# para eliminar un elemento definido de una lista

cosa.remove("Leovigildo")
cosa.remove(24)
print(cosa)

# para eliminar el último elemento de una lista
cosa.pop()
print(cosa)

# para unir o concatenar elementos de diferentes listas

fallos = [2,2,4,8,8,8,8,8,5,5,5,8]
resultado = numeros + fallos
print(resultado)

# * con las listas funciona como un repetidor

prueba = [2,2,4,8,8,8,8,8,5,5,5,8]*3
print(prueba)


#para convertir una tupla en una lista se usa el método tuple 
""" cosa = ("Manolo", 24,5,189)
cosalista = list(cosa)
print(cosalista) """