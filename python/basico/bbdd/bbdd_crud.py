import sqlite3

mi_conexion = sqlite3.connect("python/basico/bbdd/sql/gestion_productos_3")

mi_cursor = mi_conexion.cursor()

# Recuperación de datos de una tabla
mi_cursor.execute("SELECT * FROM productos WHERE seccion = 'Cerámica'")

productos = mi_cursor.fetchall()
print(productos)


# Update 

mi_cursor.execute("UPDATE productos SET precio = 35 WHERE nombre_articulo='Pelota'")

mi_cursor.execute("SELECT * FROM productos")
actualizados = mi_cursor.fetchall()
print(actualizados)

# Delete 
mi_cursor.execute("DELETE FROM productos WHERE id=5")

mi_cursor.execute("SELECT * FROM productos")
borrados = mi_cursor.fetchall()
print(borrados)


mi_conexion.commit()

mi_conexion.close()