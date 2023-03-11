# Ejemplo de for junto a formatos de print

asignaturas = ["Derecho Administrativo","Derecho Laboral","Derecho Administrativo","Derecho Mercantil", "Derecho Civil","Derecho Internacional Privado","Derecho Internacional Público","Derecho Penal"]

for i in asignaturas:
    print("Asignatura: " + i, end="***\n") #end permite definir el separador al final de cada elemento, por defecto es un salto de línea
    

# Ejemplo de print f, permite unir textos con variables sin necesidad de concatenar

for i in range(0,24,2):
    print(f"Valor de la variable i: {i}")
    
    