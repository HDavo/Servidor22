# ejemplo de claves primarias puestas de forma automática -> autoincrement 
import sqlite3

mi_conexion = sqlite3.connect("python/basico/bbdd/sql/gestion_productos_2")

mi_cursor = mi_conexion.cursor()

""" # creación de la tabla
mi_cursor.execute('''
    CREATE TABLE productos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre_articulo VARCHAR(50),
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


mi_cursor.execute("INSERT INTO productos VALUES (NULL ,'Tren',15, 'Juguetería')")


mi_conexion.commit()

mi_conexion.close()