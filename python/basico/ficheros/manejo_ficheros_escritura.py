# para manejar ficheros se debe importar previamente lo siguiente

from io import open #con esto podremos abrir el fichero externo

fichero_texto = open("python/basico/ficheros/fichero.txt","w") # se puede especificar el modo de apertura

# después de haber ejecutado el código se crea un fichero en la raíz, si no hemos especificado una ruta.
# En el caso de especificar una ruta se nos genera dentro de esa ruta (si es correcta)

frase="Hola Pepe,\nesto es una prueba de ficheros con Python.\n"

fichero_texto.write(frase) # añade al fichero indicado un string

otra_frase = "Más contenido para el fichero para probar readlines"
fichero_texto.write(otra_frase)

fichero_texto.close()


