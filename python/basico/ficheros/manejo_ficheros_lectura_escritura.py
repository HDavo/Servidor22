# para poner el modo lectura y escritura debemos poner r+

from io import open #con esto podremos abrir el fichero externo

fichero_texto = open("python/basico/ficheros/fichero.txt","r+") # se puede especificar el modo de apertura

lista_contenido = fichero_texto.readlines()

lista_contenido[-1] = "Línea añadida usando el modo de lectura y escritura\n"

fichero_texto.seek(0)

fichero_texto.writelines(lista_contenido)

fichero_texto.close()