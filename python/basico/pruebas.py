# cosas = ("ratón", "teclado", "puntero","pantalla")

# for x in cosas:
#     print(x)
    
"""
Ejemplo de que se puede incluir documentación en un módulo y al acceder al módulo podemos ver la documentación.
Introducido en la parte de documentación.
"""



mis_cosas = {'perro':'python',
            'raza':'mestizo', 
            'color':'varios'
}

for x in mis_cosas:
	print(x, ':', mis_cosas[x])
 
 
 
otras_cosas = {'ramon', 'pepe', 'paco'}

for x in otras_cosas:
	print(x)
 
 
for x in range(5):
    for y in range(6):
        print(x, end=' ')
    print()