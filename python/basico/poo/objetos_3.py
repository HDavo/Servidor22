# ejemplo con constructor 

class Coche():
    
    def __init__(self): #el constructor tiene el mismo nombre en todas las clases, 
       self.ancho = 200
       self.largo = 300
       self.ruedas = 4
       # para encapsular un atributo self.__ruedas = 6
       self.__enMarcha = False #al estar encapsulada solo podrá ser modificada dentro de la clase
       # si se encapsula una variable debemos referirnos a ella con el formato con dos guiones
    
    
    def arrancar(self, inicio):
        self.__enMarcha = inicio
        
        if self.__enMarcha:
            prueba = self.__comprobacion()
            
        if self.__enMarcha and prueba:
            return "El coche está en movimiento"
        elif self.__enMarcha and prueba==False:
            return "Coche roto"
        else:
            return "El coche está aparcado"
        
    def estado(self):
        print(f"El coche tiene {self.ruedas} ruedas. Su ancho es: {self.ancho} y su largo es {self.largo}")
        
    def __comprobacion(self):
        print("Comprobando cosas")
        
        self.gasolina = "OK"
        self.aceite = "cosa"
        self.puertas = "CERRADAS"
        
        if self.gasolina.upper=="OK" and self.aceite.upper == "OK" and self.puertas.upper == "CERRADAS":
            return True
        else:
            return False
        
        
cocheRojo = Coche()

print(cocheRojo.arrancar(True))
cocheRojo.largo = int(input("Introduce el largo de tu coche en centimetros: "))
cocheRojo.ancho = int(input("Introduce el ancho de tu coche en centimetros: "))
cocheRojo.ruedas = int(input("Introduce el número de ruedas de tu coche: "))

cocheRojo.estado()

print("\nOtro coche\n")

cocheAzul = Coche()
print(cocheAzul.arrancar(False))

cocheAzul.estado()