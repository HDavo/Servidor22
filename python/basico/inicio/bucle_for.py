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

# Continue
    
frase = "Pepe es una persona"

contador = 0

for i in frase:
    if i==" ": # con continue cada vez que se encuentre un espacio, lo ignorará en ese ciclo y seguirá la ejecución hasta el final
        continue
    contador+=1

print(contador)

# Pass -> devuelve un null. Ante casos de clases y funciones que aún no se han completado y que permita ejecutar aunque estén sin completar.


# else dentro de for.
# En este caso else se ejecuta cuando el bucle principal está vacío, en caso de no poner el break se ejecuta siempre el else.

correo = input("Introduce tu correo electrónico.\n")

for i in correo:
    if i=="@":
        signo=True
        print("Correo válido")
        break

else:
    arroba=False
    print("Correo no válido")
    
# print(signo)