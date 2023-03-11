# Ejemplo de uso de los operadores lógicos en python

""" 
and
or
in """

#Ejemplo de and
""" print("Bienvenido. Introduce los siguientes datos: ")

distancia = int(input("Introduce la distancia al trabajo en kilometros"))
print(distancia)

miembros = int(input("Introduce el número de miembros de la familia"))
print(miembros)

salario= int(input("Introduce el sueldo bruto del hogar"))
print(salario)

if distancia>40 and miembros>3 and salario<=25000:
    print("Puedes optar a la retención mínima.")
elif distancia>30 and miembros>3 and salario<=25000:
    print("Tienes deerecho a la retención media.")
elif distancia<30 and miembros<3 and salario>25000:
    print("No tienes derecho a ninguna deducción")
     """
    
#Ejemplo de in usando una lista
# también puede usarse para comparar con strings con los datos separados por comas

print("Asignaturas optativas para este curso")
print("Derecho Tributario","Derecho Administrativo","Dibujo 3D","Emprendimiento")
asignaturas = ["derecho tributario","derecho administrativo","dibujo 3d","emprendimiento"]

eleccion = input("Introduce la asignatura que deseas cursar: ").lower()

if eleccion in asignaturas:
    print("Has elegido: " + eleccion)
else:
    print("Opción no válida")
    
    
