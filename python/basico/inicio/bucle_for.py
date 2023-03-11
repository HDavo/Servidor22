numeros = [1,2,3,4,5,6,7,8,9]

for i in numeros:
    print("Hola " + str(i))


# Python permite usar en for listas con strings. Se repite según el número de elementos.

estaciones = ["Primavera", "Verano", "Otoño", "Invierno"]

for i in estaciones:
    print(i)
    
# en el caso de usar un string como elemento a recorrer, lo hará por elementos sin necesidad de usar len, aunque también puede usarse con len pero debe juntarse con range

palabra = "Murcielago"
for i in palabra:
    print("Hola")
    
for i in range(len(palabra)):
    print("Hola2")

# Ejemplo de for junto a formatos de print

asignaturas = ["Derecho Administrativo","Derecho Laboral","Derecho Administrativo","Derecho Mercantil", "Derecho Civil","Derecho Internacional Privado","Derecho Internacional Público","Derecho Penal"]

for i in asignaturas:
    print("Asignatura: " + i, end="***\n") #end permite definir el separador al final de cada elemento, por defecto es un salto de línea
    

# range -> crea una lista de números entre los límites que se hayan especificado dentro de la función

# los dos primeros números son los límites y el tercero es el salto dentro del rango determinado
for x in range(21, 50, 2): 
    print(x)
    
exam = range(21, 45, 3)

for i in exam:
    print(i)

