class Coche():
    largo = 300
    ancho = 200
    ruedas = 6
    enMarcha = False
    
    def arrancar(self):
        self.enMarcha = True
        
    def estado(self):
        if (self.enMarcha):
            return "El coche está en movimiento"
        else:
            return "El coche está aparcado"
        
cocheRojo = Coche()

print("Largo del coche: ", cocheRojo.largo)
print("Ancho del coche", cocheRojo.ancho)
print("Número de ruedas: ", cocheRojo.ruedas)

print(cocheRojo.estado())



        