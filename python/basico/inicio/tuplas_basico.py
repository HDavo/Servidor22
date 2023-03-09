# No se pueden modificar una vez se han creado, a diferencia de las listas (no permiten añadir, eliminar, mover...)



"""
Se diferencian en que:
-Son más rápidas
-Ocupan menos espacio
-Formatean strings
-Pueden usarse como claves de un diccionario
"""

cosa = ("Manolo", 24,5,189)

#las tuplas unitarias deben seguir siempre la siguiente forma (con una coma al final)
solo = ("Pepe",)

print(cosa)
print(cosa[2]) 

# método index
posicion = cosa.index(24)
print(posicion)

# Conversión de tupla a lista -> método list
cosalista = list(cosa)
print(cosalista)

#conversión de lista a tupla -> método tuple
fallos = [2,2,4,8,8,8,8,8,5,5,5,8]
cosatupla = tuple(fallos)

print(cosatupla)


# comprobar que tenemos un elemento dentro de una tupla -> in

existe = "Pepe" in cosa
print(existe)

# comprobar el número de elementos que existen dentro de una tupla -> count

cantidad = cosatupla.count(8)
print(cantidad)

# longitud de una tupla -> len (devuelve el número de elementos NO el índice)

print(len(cosatupla))

# desempaquetado de tuplas. Se asigna el contenido de una tupla a las variables en orden 
paquete = ("Paco", 21,12,1998) 
nombre, dia, mes, annio = paquete
print(annio)


