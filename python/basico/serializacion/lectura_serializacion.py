import pickle

cosa = open("python/basico/serializacion/lista_nombres","rb") 


lista_recuperada = pickle.load(cosa)


print(lista_recuperada)