names = ["Pepe", "Manolo", "Paco", "Juan","Pablo"]

print(names) # imprime todos los elementos
print(names[0]) #podemos seleccionar una posición específica
# python permite acceder a los elementos usando índices negativos, con ellos accedemos a los elementos desde el final de la listAa
print(names[-1]) # para el último elemento
print(names[-2]) # para el penúltimo


#sustitución de elementos de la lista
names[-1] = "Bartolome"
print(names)

# elección de elementos en un rango, (no modifica la lista)

print(names[0:2])