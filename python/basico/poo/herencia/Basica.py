class Vehiculos():
    
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
        
class Moto(Vehiculos):
    pass

moto1 = Moto("Yamaha","Pcx")
moto1.estado()