import re

nombre1 = 'pepe Perez'
nombre2 = 'Antonio Alcalde'
nombre3 = 'Juan Jimenez'

""" 
match busca coincidencias siempre al comienzo de una cadena de texto.
Admite flags como findall como ignorar upper, lower..

search: busca en toda la cadena de texto el patrón especificado


"""

""" if re.match("pepe", nombre2, re.IGNORECASE):
    print("Hay coincidencia")
else:
    print('No hay coincidencia') """
    
if re.match("al", nombre2, re.IGNORECASE):
    print("Hay coincidencia")
else:
    print('No hay coincidencia')