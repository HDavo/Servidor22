# ejemplo de claves primarias puestas de forma manual
import sqlite3

mi_conexion = sqlite3.connect("python/basico/bbdd/sql/gestion_productos")

mi_cursor = mi_conexion.cursor()

# creación de la tabla
""" mi_cursor.execute('''
    CREATE TABLE productos (
        cod_articulo VARCHAR(4) PRIMARY KEY,
        nombre_articulo VARCHAR(50),
        precio INTEGER,
        seccion VARCHAR(20))
''')

# inserción de los datos

productos = [
    ("AR01","Pelota",20,"Juguetería"),
    ("AR02","Pantalón",15,"Moda"),
    ("AR03","Destornillador",35,"Ferretería"),
    ("AR04","Jarrón",45,"Cerámica"),
] 


mi_cursor.executemany("INSERT INTO productos VALUES (?,?,?,?)", productos) """


# inserciones para comprobar que verifica bien las restricciones de la tabla

# mi_cursor.execute("INSERT INTO productos VALUES ('AR03','Tren',15, 'Juguetería')")

mi_cursor.execute("INSERT INTO productos VALUES ('AR05','Tren',15, 'Juguetería')")


mi_conexion.commit()

mi_conexion.close()