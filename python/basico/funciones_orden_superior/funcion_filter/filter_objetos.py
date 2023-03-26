class Empleado:
    def __init__(self, nombre, cargo, salario):
        
        self.nombre= nombre
        self.cargo = cargo
        self.salario = salario
        
    def __str__(self):
        return "{} que trabaja como {}, tiene un salario de {} €".format(self.nombre, self.cargo,self.salario)

lista_empleados = [
    Empleado("Pepe", "Director", 85000),
    Empleado("Paco", "CFO", 60000),
    Empleado("Manolo", "Jefe de RRHH", 35000),
    Empleado("Segismundo", "Contable", 25000),
    Empleado("Orlando", "Administrativo", 15000),
    Empleado("Alberto", "Guardia de Seguridad", 100000),
]

salarios_altos = filter(lambda emple:emple.salario > 50000, lista_empleados)

for empleado_salario in salarios_altos:
    print(empleado_salario)