import re

lista_nombres = ['Pepe Perez', 'Manolo Martinez','Sara Sierra','Alberto Alcalde','Sandra Santander']

""" forma típica de usar las regex poniendo un patrón conteniendo los caracteres a controlar.
También sirve para controlar rangos de caracteres """

for elemento in lista_nombres:
    if re.findall('[u-z]', elemento):
        print(elemento)
        
        
        
cosa = ['Ma1','Lu1','Ma2','Va1','Ma3','Ma4','MaC','MaD']

for elemento in cosa:
    if re.findall('Ma[^0-2A-Z]', elemento):
        print(elemento)