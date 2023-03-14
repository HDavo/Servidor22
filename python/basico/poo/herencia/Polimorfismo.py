class Coche():
    
    def desplazamiento(self):
        print("Me desplazo utilizando cuatro ruedas")
        
class Moto():
    
    def desplazamiento(self):
        print("Me desplazo usando 2 ruedas")
        
        
class Camion():
    
    def desplazamiento(self):
        print("Utilizo 6 ruedas")

# sin polimorfismo
""" vehiculo1 = Moto()
vehiculo1.desplazamiento()

vehiculo2 = Coche()
vehiculo2.desplazamiento()

vehiculo3 = Camion()
vehiculo3.desplazamiento() """

# ejemplo de uso del polimorfismo

def desplazamientoVehiculo(cosa): # a este método le pasamos un objeto de tipo Vehículo y dependiendo el tipo del objeto llamará al método correspondiente, sin necesidad de especificar el tipo de vehículo.
    cosa.desplazamiento()


miVehiculo=Camion()
desplazamientoVehiculo(miVehiculo)

otroVehiculo = Coche()
desplazamientoVehiculo(otroVehiculo)

""" 
Si cambiamos el tipo de vehículo, por el polimorfismo cambiará el método al que llamará. Por la naturaleza de python el cambio del tipo de objeto es más sencillo que en otros lenguajes de programación, solamente basta con cambiarle el tipo.
"""

miVehiculo = Moto()
desplazamientoVehiculo(miVehiculo)