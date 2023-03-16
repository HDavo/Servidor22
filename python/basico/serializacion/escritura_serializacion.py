import pickle

lista_nombres = ["Paco","Pepe","Manolo","Sara"]

fichero_binario = open("python/basico/serializacion/lista_nombres","wb") # se hace de la misma manera que en ficheros pero cambiando el modo de escritura


# volcado de los datos dentro del fichero

pickle.dump(lista_nombres, fichero_binario)

fichero_binario.close()

del fichero_binario # borra el fichero de la memoria