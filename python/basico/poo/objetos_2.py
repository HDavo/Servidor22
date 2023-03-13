# ejemplo con constructor 

class Coche():
    
    def __init__(self): #el constructor tiene el mismo nombre en todas las clases, 
       self.ancho = 200
       self.largo = 300
       self.ruedas = 4
       # para encapsular un atributo self.__ruedas = 6
       self.__enMarcha = False
       # si se encapsula una variable debemos referirnos a ella con el formato con dos guiones
    
    
    def arrancar(self, inicio):
        self.__enMarcha = inicio
        
        if self.__enMarcha:
            return "El coche está en movimiento"
        else:
            return "El coche está aparcado"
        
    def estado(self):
        print(f"El coche tiene {self.ruedas} ruedas. Su ancho es: {self.ancho} y su largo es {self.largo}")
        
        
cocheRojo = Coche()

print(cocheRojo.arrancar(True))

cocheRojo.estado()

print("\nOtro coche\n")

cocheAzul = Coche()
print(cocheAzul.arrancar(False))

cocheAzul.estado()