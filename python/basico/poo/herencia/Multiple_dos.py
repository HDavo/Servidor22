# Ejemplo de clases usando super() y también de isinstance()

class Persona():
    
    def __init__(self,nombre,edad,residencia):
        self.nombre = nombre
        self.edad = edad
        self.residencia = residencia
        
    def descripcion(self):
        print(f"\nNombre: {self.nombre}\nEdad: {self.edad}\nLugar de residencia: {self.residencia}")
    

class Empleado(Persona):
    
    def __init__(self,salario,antiguedad,nombre_empleado,edad_empleado,residencia_empleado):
        super().__init__(nombre_empleado,edad_empleado,residencia_empleado)
        self.salario = salario
        self.antiguedad = antiguedad
        
    def descripcion(self):
        super().descripcion()
        print(f"Salario: {self.salario}\nAntigüedad: {self.antiguedad}")
    
    
Pepe = Persona("Pepe", 45, "España")

Manolo = Empleado(2500, 15, "Manolo",35,"Lisboa")

Pepe.descripcion()
Manolo.descripcion()

# isinstance devuelve true o false. Para comprobar el principio de sustitución entre clases.

print(isinstance(Manolo, Empleado))
print(isinstance(Manolo, Persona))
print(isinstance(Pepe, Empleado))