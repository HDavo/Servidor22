# cosas = ("ratón", "teclado", "puntero","pantalla")

# for x in cosas:
#     print(x)
    
"""
Ejemplo de que se puede incluir documentación en un módulo y al acceder al módulo podemos ver la documentación.
Introducido en la parte de documentación.
"""



miscosas = {'perro':'python',
            'raza':'mestizo', 
            'color':'varios'
}

for x in miscosas:
	print(x, ':', miscosas[x])
 
 
 
otracosa = {'ramon', 'pepe', 'paco'}

for x in otracosa:
	print(x)
 
 
for x in range(5):
    for y in range(6):
        print(x, end=' ')
    print()