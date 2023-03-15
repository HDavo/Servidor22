# lo mismo que el ejemplo de multiple pero usando super dentro de la clase VElectricos

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
        
class VElectricos(Vehiculos):
    def __init__(self,autonomia, marca, modelo):
        super().__init__(marca, modelo)
        self.autonomia = autonomia
        
    def cargando(self):
        self.carga = True
  
    def estado(self):
        super().estado()
        print(f"Autonomia: {self.autonomia}")
        
        
class Moto(Vehiculos):
    cosa=""
    def caballito(self):
        self.cosa = "Iniciando maniobra de caballito"
        return self.cosa
        
    def estado(self): # para la sobrecarga de métodos, el método debe tener el mismo nombre que en la clase padre y además debe tener el mismo número de parámetros pasados.
        print(f"Marca: {self.marca}\nModelo: {self.modelo}\nEn marcha: {self.enMarcha}\nAcelerando: {self.acelera}\nFrenando: {self.frena}\n{self.caballito()}")


class Furgoneta(Vehiculos):
    
    def carga(self, cargar):
        self.cargado=cargar
        if self.cargado:
            return "La furgoneta está cargada"
        else:
            return "La furgoneta está vacía"

class BiciElectrica(VElectricos): 
    pass

    