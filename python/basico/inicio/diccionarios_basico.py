# los diccionarios son como a un array asociativo (clave : valor)

# admiten los mismos tipos de datos que las listas y las tuplas, además pueden contener dentro de ellos listas y tuplas
# los datos almacenados no están ordenados
# los elementos se separan por comas

cosa = {"Alemania":"Berlín", "Francia":"París","Portugal": "Lisboa"} #(clave : valor)

# imprimir un diccionario completo
print(cosa)

#para acceder a un elemento en concreto
print(cosa["Francia"])

#añadir nuevos elementos a un dicccionario -> nb_diccionario[clave] = valor

cosa["Australia"] = "Sidney"
print(cosa)

# para modificar un valor de un diccionario -> misma manera que al añadir pero indicando la clave que queremos  modificar
cosa["Australia"] = "Canberra"
print(cosa)


# para eliminar un elemento -> método del nb_diccionario[clave]

del cosa["Francia"]
print(cosa)


mezcla = {"Nombre": "Jordan", 23: "Chicago Bulls", "Anillos":6}
print(mezcla)


# uso de una tupla como clave de un diccionario

claves = ["Iverson", "Duncan", "Roy", "Varejao"]

diccionario = {claves[0]:"Sixers", claves[1]:"Spurs", claves[2]:"Blazers",claves[3]:"Cavaliers"}
print(diccionario)
# para acceder a una posición específica se puede hacer de las siguientes maneras:

print(diccionario["Iverson"]) # indicando directamente la clave
print(diccionario[claves[2]]) # indicando la posición que queremos en base a la tupla usada

# Ejemplo de uso de una tupla como valor dentro de un diccionario

jugadores = {"Dorsal":23, "Nombre":"Jordan", "Equipo":"Chicago Bulls", "Anillos":6}
print(jugadores)

# añadiendo una tupla como valor dentro de un diccionario
jugadores["Anillos"] = (91,92,93,96,97,98)
print(jugadores)


# un diccionario dentro de otro diccionario
otro = {'Dorsal': 23, 'Nombre': 'Jordan', 'Equipo': 'Chicago Bulls', 'Anillos': {"temporadas": (91,92,93,96,97,98)}}
print(otro)
# print(otro["Anillos"["temporadas"]]) # esto no se puede hacer

# métodos que se pueden usar con diccionarios
#keys
print(otro.keys())

# values
print(otro.values())

# len
print(len(otro))