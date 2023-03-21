# usando sqlite 
import sqlite3 # para poder usar el motor elegido

mi_conexion = sqlite3.connect("python/basico/bbdd/primera_bbdd_python") # creación de la conexión con la bbdd

mi_cursor = mi_conexion.cursor() # creación del cursor o puntero

# mi_cursor.execute("CREATE TABLE productos (nombre_articulo VARCHAR(50), precio INTEGER, seccion VARCHAR(20))") # solo debe ejecutarse la primera vez

mi_cursor.execute("INSERT INTO PRODUCTOS VALUES('Balón',15, 'Deportes')")

mi_conexion.commit() # para confirmar los cambios que hemos hecho en la tabla


mi_conexion.close() # cierre