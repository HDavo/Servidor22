# sobre el ejemplo de claves primarias puestas de autoincrement -> unique 
import sqlite3

mi_conexion = sqlite3.connect("python/basico/bbdd/sql/gestion_productos_3")

mi_cursor = mi_conexion.cursor()

# creación de la tabla
""" mi_cursor.execute('''
    CREATE TABLE productos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre_articulo VARCHAR(50) UNIQUE,
        precio INTEGER,
        seccion VARCHAR(20))
''')

# inserción de los datos

productos = [
    ("Pelota",20,"Juguetería"),
    ("Pantalón",15,"Moda"),
    ("Destornillador",35,"Ferretería"),
    ("Jarrón",45,"Cerámica"),
] 


mi_cursor.executemany("INSERT INTO productos VALUES (NULL,?,?,?)", productos) """
# al tener una clave primaria automática el número de parámetros no coincide, por eso se debe usar NULL

# para comprobar unique 
# mi_cursor.execute("INSERT INTO productos VALUES (NULL ,'Pelota',15, 'Juguetería')")

mi_cursor.execute("INSERT INTO productos VALUES (NULL ,'Pelotas',25, 'Deportes')")


mi_conexion.commit()

mi_conexion.close()