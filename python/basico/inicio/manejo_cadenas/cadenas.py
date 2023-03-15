""" 
Algunos de los métodos disponibles para los strings son los siguientes:
- nombre.upper()
- nombre.lower()
- nombre.capitalize()
- count("c") -> para ver el número de veces que se repite un caracter dentro de un string
- isalpha() -> evalúa todos los caracteres para ver si están dentro del abecedario
- isalum() -> devuelve un boolean si la cadena es alfanumérica [A-Za-z0-9]
- edad.isdigit() // isdecimal() -> devuelve un boolean
find() indice desde el principio de la cadena // rfind() indice desde el final de la cadena


- strip() -> elimina espacios en blanco dentro de un string
- split() -> separa el string según el separador indicado. Devuelve una lista.
- replace("pepe","cosa") -> reemplaza el string especificado en primer lugar con el que se pone en segundo lugar dentro del string
"""

nombre = input("Introduce tu nombre de usuario: ")

print("Tu nombre de usuario es: ",nombre.upper())

print("Tu nombre de usuario es: ",nombre.lower())

print("Tu nombre de usuario es: ",nombre.capitalize())

edad = input("Introduce tu edad: ")

while edad.isdigit() ==False:
    
    print("Solo se pueden usar valores numéricos")
    
    edad = input("Introduce tu edad: ")
    
if int(edad)<18:
    print("No puedes entrar")
else:
    print("Puedes entrar")