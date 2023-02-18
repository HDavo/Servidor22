# range es un objeto 

ex = range(5) 
""" 
devuelve los valores anteriores al indicado como límite superior si se usa un for,
por defecto nos da un rango(x,n), si no se indica un límite inferior será 0 
"""
exa = range(10, 21)

for i in ex:
    print(i)

for x in exa:
    print(x)

# se puede indicar el salto que queremos dentro del rango, corresponde al tercer valor dentro del paréntesis

exam = range(21, 45, 3)

for i in exam:
    print(i)

# pueden usarse de manera directa
for x in range(21, 50, 2):
    print(x)