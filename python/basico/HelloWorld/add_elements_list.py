numbers = [1,2,3,4,5]
print(numbers)

#para añadir un elemento al final de la lista

numbers.append(6)
print(numbers)

#para añadir un elemento en una posición determinada

numbers.insert(1, 1.5) #primero se indica la posición y luego el elemento
print(numbers)

# para eliminar elementos
numbers.remove(1.5) #elimina la primera ocurrencia del valor pasado
print(numbers)

#para vaciar una lista
# numbers.clear()

# para buscar un valor dentro de una lista ()
print(1 in numbers) 
# también puede usarse not in


#para saber el tamaño de una lista

size = len(numbers)
print("El tamaño de la lista es: ", size)


# for para recorrer una lista

for x in numbers:
    print(x)


#while para  recorrer una lista
print("\nWhile")
i = 0
while i < len(numbers):
    print(numbers[i])
    i+=1