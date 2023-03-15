# para manejar ficheros se debe importar previamente lo siguiente

from io import open #con esto podremos abrir el fichero externo

fichero_texto = open("python/basico/ficheros/fichero.txt","r") # se puede especificar el modo de apertura

# contenido=fichero_texto.read() # read() -> lee toda la información del fichero indicado



# en el caso de poner más de un modo de lectura, prevalece el primero y el que se hará
lineas = fichero_texto.readlines() # readlines() -> lee la información de un fichero línea o línea y almacena la información en una lista
# Al darnos una lista podemos usar los diferentes métodos de lista para acceder al contenido 
fichero_texto.close()

# print(contenido)

print(lineas)
# print(lineas[1])
# print(lineas[2])