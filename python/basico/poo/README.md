Conceptos y cosas útiles para POO con Python

# POO

## Método constructor

```
def __init__(self): #el constructor tiene el mismo nombre en todas las clases, 
       self.ancho = 200
       self.largo = 300
       self.ruedas = 4
       # para encapsular un atributo self.__ruedas = 6
       self.enMarcha = False

       #si se encapsula un atributo o variable debemos referirnos a él con los dos guiones bajos
```


## Encapsulación de métodos
Para llamarlos debe usarse el formato de la encapsulación

```
 def __comprobacion(self):
        print("Comprobando cosas")
        
        self.gasolina = "OK"
        self.aceite = "cosa"
        self.puertas = "CERRADAS"
        
        if self.gasolina.upper=="OK" and self.aceite.upper == "OK" and self.puertas.upper == "CERRADAS":
            return True
        else:
            return False
        
```

## Herencia 
Para indicar que una clase hereda de otra se hace de la siguiente manera:
```
class Moto(Vehiculos):
    pass        
```

### Super

```
class Persona():
    
    def __init__(self,nombre,edad,residencia):
        self.nombre = nombre
        self.edad = edad
        self.residencia = residencia
        
    def descripcion(self):
        print(f"\nNombre: {self.nombre}\nEdad: {self.edad}\nLugar de residencia: {self.residencia}")       
```

```
class Empleado(Persona):
    
    def __init__(self,salario,antiguedad,nombre_empleado,edad_empleado,residencia_empleado):
        super().__init__(nombre_empleado,edad_empleado,residencia_empleado)
        self.salario = salario
        self.antiguedad = antiguedad
        
    def descripcion(self):
        super().descripcion()
        print(f"Salario: {self.salario}\nAntigüedad: {self.antiguedad}")       
```

### Herencia múltiple
```
class BiciElectrica(Vehiculos,VElectricos):
# dentro del paréntesis se ponen las diferentes clases de las que hereda
    pass

""" 
En el caso de usar herencia múltiple, la clase que se pasa en primer lugar dentro del paréntesis tiene prioridad a la hora de llamar a los diferentes métodos como el constructor. El resto se priorizan de izquierda a derecha.

"""      
```