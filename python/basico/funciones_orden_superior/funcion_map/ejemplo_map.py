# aplica una función a cada elemento de una lista iterable (listasd, tuplas...), devuelve una lista con los resultados

class Empleado:
    def __init__(self, nombre, cargo, salario):
        
        self.nombre= nombre
        self.cargo = cargo
        self.salario = salario
        
    def __str__(self):
        return "{} que trabaja como {}, tiene un salario de {} €".format(self.nombre, self.cargo,self.salario)

lista_empleados = [
    Empleado("Pepe", "Director", 5000),
    Empleado("Paco", "CFO", 4500),
    Empleado("Manolo", "Jefe de RRHH", 1500),
    Empleado("Segismundo", "Contable", 2000),
    Empleado("Orlando", "Administrativo", 1250),
    Empleado("Alberto", "Guardia de Seguridad", 10000),
]


def calculo_comision(empleado):
    if empleado.salario<=3000:
        empleado.salario = empleado.salario*1.03
        
    return empleado

mapa_empleados = map(calculo_comision, lista_empleados)

for empleado in mapa_empleados:
    print(empleado)