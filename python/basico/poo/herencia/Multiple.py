#ejemplo de herencia multiple y de sobrecarga de métodos

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
        
class VElectricos():
    def __init__(self,autonomia):
        self.autonomia = autonomia
        
    def cargando(self):
        self.carga = True
  
        
class Moto(Vehiculos):
    cosa=""
    def caballito(self):
        self.cosa = "Iniciando maniobra de caballito"
        return self.cosa
        
    def estado(self): # para la sobrecarga de métodos, el método debe tener el mismo nombre que en la clase padre y además debe tener el mismo número de parámetros pasados.
        print(f"Marca: {self.marca}\nModelo: {self.modelo}\nEn marcha: {self.enMarcha}\nAcelerando: {self.acelera}\nFrenando: {self.frena}\n{self.caballito()}")


moto1 = Moto("Yamaha","Pcx")
moto1.caballito()
moto1.estado()

class Furgoneta(Vehiculos):
    
    def carga(self, cargar):
        self.cargado=cargar
        if self.cargado:
            return "La furgoneta está cargada"
        else:
            return "La furgoneta está vacía"

furgoneta1 = Furgoneta("Ford","Transit")

furgoneta1.arrancar()
furgoneta1.estado()
print(furgoneta1.carga(False))


# Ejemplo de una clase con g¡herencia múltiple

class BiciElectrica(Vehiculos,VElectricos): # dentro del paréntesis se ponen las diferentes clases de la que hereda
    pass

""" 
En el caso de usar herencia múltiple, la clase que se pasa en primer lugar dentro del paréntesis tiene prioridad a la hora de llamar a los diferentes métodos como el constructor. El resto se priorizan de izquierda a derecha.

"""
    
bicicleta1 = BiciElectrica()
    