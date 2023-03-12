"""
Parecidos al funcionamiento de las funciones. En lugar de tener un return usan yield, aunque pueden tener también return.
Después de haber sido llamada la función devuelve el flujo a la parte donde fue llamada, es decir, la función se pausa y se guarda su estado.
Devuelve un objeto iterable, por lo que puede usar métodos como iter o next. Generando un nuevo valor dentro de ese objeto con cada nueva iteración o ejecución de la función.

next es una llamada al objeto iterador


- Más eficientes que las funciones tradicionales
- Útiles ante listas con valores infinitos

"""

def generador():
    n = 1
    yield n
    
    n+=1
    yield n
    
    n+=1
    yield n
    

g = generador()
print(next(g))
print(next(g))
print(next(g))


#Ejemplo de función normal
def func_pares(max):
    num = 1
    listaNumeros=[]
    
    while num<max:
        listaNumeros.append(num*2)
        
        num+=1
        
    return listaNumeros

print(func_pares(12))


#Hecho con generador

def generador_pares(maximo):
    num=1
    
    while num<maximo:
        
        yield num*2
        
        num+=1
        
devolucion = generador_pares(12)

# for i in devolucion:
#     print(i)

print(next(devolucion)) 