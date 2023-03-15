# por defecto al empezar la posición del puntero está al principio del fichero y cuando lo cerramos pasa a estar al final del contenido.

# seek() -> dentro de los paréntesis indicamos donde se va a situar el puntero

from io import open #con esto podremos abrir el fichero externo

fichero_texto = open("python/basico/ficheros/fichero.txt","r") # se puede especificar el modo de apertura


# fichero_texto.seek(8) # marca la nueva posición desde la que se comenzará la lectura del fichero
# print(fichero_texto.read())

# seek y read mueven el fichero pero se diferencian en que seek solo mueve el puntero sin hacer ninguna otra acción, mientras que read lee el contenido mientras mueve el puntero.
# print(fichero_texto.read(11))


# para poner el puntero en la mitad del contenido del fichero

# fichero_texto.seek(len(fichero_texto.read())/2)

# print(fichero_texto.read())

# para poner el puntero al final de la primera linea

fichero_texto.seek(len(fichero_texto.readline()))

print(fichero_texto.read())

fichero_texto.close()