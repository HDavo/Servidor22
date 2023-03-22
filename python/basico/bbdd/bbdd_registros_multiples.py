# usando sqlite 
import sqlite3 # para poder usar el motor elegido

mi_conexion = sqlite3.connect("python/basico/bbdd/sql/primera_bbdd_python") # creación de la conexión con la bbdd

mi_cursor = mi_conexion.cursor() # creación del cursor o puntero

# mi_cursor.execute("CREATE TABLE productos (nombre_articulo VARCHAR(50), precio INTEGER, seccion VARCHAR(20))") # solo debe ejecutarse la primera vez

# mi_cursor.execute("INSERT INTO PRODUCTOS VALUES('Balón',15, 'Deportes')")


# inserción múltiple con objetos (lista) de python

""" varios_productos = [
    ("Camiseta", 10, "Deportes"),
    ("Jarrón", 120, "Decoración"),
    ("Camión", 25, "Juguetería")
]

mi_cursor.executemany("INSERT INTO productos VALUES (?,?,?)", varios_productos) """
# la línea previa funciona de la misma manera que en php pero en este caso, se inserta cada uno de los valores de los elementos de la lista 

mi_cursor.execute("SELECT * FROM productos")

# para obtener varios registros se usan también listas

recuperacion_productos = mi_cursor.fetchall() #fetchall() devuelve listas

# print(recuperacion_productos)

for producto in recuperacion_productos:
    print("Nombre de artículo: ", producto[0], "Sección: ", producto[2]) #teniendo esto podemos recuperar diferentes partes de los elementos insertados, ya que se rigen por posiciones que son equivalentes a las columnas dentro de una tabla

mi_conexion.commit() # para confirmar los cambios que hemos hecho en la tabla


mi_conexion.close() # cierre