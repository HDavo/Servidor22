import math

def raices(num):
    if num<0:
        raise ValueError ("El número no puede ser negativo")
    else:
        resultado = math.sqrt(num)
        return resultado
    
cosa = int(input("Introduce un número: "))

try:
    print(raices(cosa))
except ValueError as NumNegativo: #podemos darle un alias a una excepciónl
    print(NumNegativo)

print("Fin")