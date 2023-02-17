# Conversión entre tipos de datos. Para convertir entre tipos de datos tenemos lo siguiente:
"""
int()
float()
bool()
str() 
"""


birth_year = input("Enter your birth year: ")

#si ponemos esto directamente nos da un error al ser distintos tipos de datos
# age = 2020 - birth_year

#int(birth_year) # convierte lo recibido mediante el input en tipo int, no lo convierte de forma definitiva, solamente para la operación
age = 2020 - int(birth_year)
print(age)

