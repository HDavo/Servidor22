import re # siempre debe importarse si queremos usar expresiones regulares con python

cadena = "Prueba de funcionamiento de las expresiones regulares en Python. Python no usa ; al final"

busqueda = "Python"

""" if re.search(busqueda, cadena) is not None:

    print("He encontrado una coincidencia")
else:
    print("No hay coincidencias") """


# --------Ejemplos de funciones que se pueden usar con expresiones regulares---------------
# el método search devuelve un objeto si encuentra coincidencias o none si no las encuentra

resultado = re.search(busqueda,cadena)

print(resultado.start()) # start devuelve el número del caracter donde empieza la coincidencia
print(resultado.end()) # end devuelve el número del caracter donde finaliza la coincidencia

print(resultado.span()) # nos da una tupla con los valores en donde se encuentra la coincidencia


encontrado = re.findall(busqueda, cadena) # devuelve una lista que contiene los elementos coincidentes
print(len(encontrado)) 