import re

""" 
Formas de usar las regex. Anclas o caracteres comodín

^ (empieza con)  o delante de un rango sirve para buscar lo contrario a lo establecido dentro del rango [^0-2]
$ (finaliza con)
[] para definir patrones de búsqueda
. cualquier caracter
? 0 o más ocurrencias para el caracter
| o
* cualquier número de ocurrencias
+ 1 o más ocurrencias
{} agrupar una regex
() para contener una regex
\d para ver si contiene un número en esa posición

"""

lista_nombres = ['Pepe Perez', 'Manolo Martinez','Sara Sierra','Alberto Alcalde','Sandra Santander']

for elemento in lista_nombres:
    if re.findall('^Sa', elemento): 
        print(elemento)



lista_correos = [
    'pepe@pepemail.com',
    'manolo@pepemail.org',
    'sara@pepemail.es',
    'alberto@pepemail.io',
    'sandra.pepemail.es'
]

for elemento in lista_correos:
    if re.findall('io$', elemento): 
        print(elemento)
        
        
print('-------------Correos validos---------------')
patron = "[@]"
for elemento in lista_correos:
    if re.findall(patron, elemento):
        print(elemento)