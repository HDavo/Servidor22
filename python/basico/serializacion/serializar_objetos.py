import pickle

# incluye la lectura y escritura de objetos serializados

class Vehiculo():
    
    def __init__(self, marca, modelo):
        self.marca = marca
        self.modelo = modelo
        self.enMarcha = False
        self.acelera = False
        self.frena = False
        
    def arrancar(self):
        self.enMarcha = True
        
    def acelerar(self):
        self.acelera = True
        
    def frenar(self):
        self.frena = True
        
    def estado(self):
        print(f"Marca: {self.marca}\nModelo: {self.modelo}\nEn marcha: {self.enMarcha}\nAcelerando: {self.acelera}\nFrenando: {self.frena}")

coche1 = Vehiculo("Ford","Fiesta")
coche2 = Vehiculo("Renault","Clio")
coche3 = Vehiculo("Honda","Civic")

coches = [coche1,coche2,coche3]

# Escritura
fichero_coches = open("python/basico/serializacion/Coches_lista","wb") 

pickle.dump(coches,fichero_coches)

fichero_coches.close()

del fichero_coches


# Recuperación de datos. 
"""
En el caso de los objetos serializados, para recuperar la información (por el momento) es necesario que tengamos el código del objeto en cuestión para poder acceder a las características de ese tipo de objeto recuperado.
En este caso no ha dado ningún problema debido a que está todo dentro del mismo fichero.
"""


cosas_coches = open("python/basico/serializacion/Coches_lista","rb")

mis_coches = pickle.load(cosas_coches)

cosas_coches.close()

# al ser un objeto del tipo de datos del fichero, podemos usar los métodos que este tipo de objetos tiene como se puede ver en el siguiente bucle. 

for i in mis_coches:
    print(i.estado())