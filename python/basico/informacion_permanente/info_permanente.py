import pickle

class Persona:
    
    def __init__(self, nombre, genero, edad):
        self.nombre = nombre
        self.genero = genero
        self.edad = edad
        print(f"Se ha creado una persona nueva con el nombre: {self.nombre}")
        
    def __str__(self):
        return "{} {} {}".format(self.nombre, self.genero, self.edad)
    

class ListaPersonas:
    
    personas = []
    
    def __init__(self):
        cosa_personas = open("python/basico/informacion_permanente/fichero_externo","ab+") 
        # este modo de apertura deja el puntero al final, por lo que después de añadir un nuevo elemento es necesario volver a ponerlo al principio, en el caso de que queramos leer la información completa
        cosa_personas.seek(0)
        
        try:
            self.personas = pickle.load(cosa_personas)
            print("Se cargaron {} personas del fichero externo".format(len(self.personas)))
        except:
            print("El fichero está vacío")
        finally:
            cosa_personas.close()
            del cosa_personas
        
    
    def agregarPersonas(self, cosa):
        self.personas.append(cosa)
        self.guardarPersonasEnFicheroExterno()
        
    def mostrarPersonas(self):
        for i in self.personas:
            print(i)
            
    def guardarPersonasEnFicheroExterno(self):
        cosa_personas= open("python/basico/informacion_permanente/fichero_externo","wb")
        pickle.dump(self.personas, cosa_personas)
        cosa_personas.close()
        del cosa_personas
        
    def mostrarInfoFicheroExterno(self):
        print("Esta es la información del fichero externo: ")
        
        for i in self.personas:
            print(i)

""" 
listado_personas = ListaPersonas()
# Con esto se comprueba que se pueden crear personas y ponerlas dentro de una lista (antes de tener hecho el constructor)
pepe = Persona("Pepe","M","24")
juan = Persona("Juan","M","35")
sara = Persona("Sara","F","26")

# print(pepe.__str__())


listado_personas.agregarPersonas(pepe)
listado_personas.agregarPersonas(juan)
listado_personas.agregarPersonas(sara)

listado_personas.mostrarPersonas() """

listado_personas = ListaPersonas() # llamada al constructor y creación del objeto de este tipo
pers = Persona("Sara","F","37")

listado_personas.agregarPersonas(pers) # se pasa el objeto de tipo de persona y se agrega mediante el método a la lista y se guarda en el fichero externo

listado_personas.mostrarInfoFicheroExterno()