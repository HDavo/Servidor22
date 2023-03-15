# fichero para mostrar el modo de apertura de un fichero append, importante si queremos evitar la sobreescritura del contenido previo

from io import open #con esto podremos abrir el fichero externo

fichero_texto = open("python/basico/ficheros/fichero.txt","a") # se puede especificar el modo de apertura


fichero_texto.write("\nContenido añadido con el modo de apertura append para evitar la sobreescritura del contenido previo.")

fichero_texto.close()

