#yield from

""" 
Sirve para simplificar el código en caso de usar generadores y bucles anidados.
# yield from permite no tener que usar un nuevo from para obtener subelementos, como se ve en el ejemplo.

"""

def dev_ciudades(*ciudades):
    #el asterisco dentro del parámetro de la función indica lo mismo que los ... de php, es decir, que se recibe un número indeterminados de parámetros y además se hace en forma de tupla
    
    for elemento in ciudades:
        # for subElem in elemento: 
        # yield from permite no tener que usar un nuevo from para obtener subelementos
            yield from elemento
            

ciudades_devueltas = dev_ciudades("Oporto", "Lisboa", "Vigo", "Lugo", "Santiago")

print(next(ciudades_devueltas))

print(next(ciudades_devueltas))

print(next(ciudades_devueltas))