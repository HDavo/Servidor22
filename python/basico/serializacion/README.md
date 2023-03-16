# Serialización
Es el proceso de convertir datos a un formato en el que puedan ser almacenados, usados o compartidos de manera más eficaz. Puede hacerse con colecciones o bien con objetos.


*Pickle* es un formato de serialización de objetos nativos de Python


Podemos hacerla usando la biblioteca *Pickle* de Python. Dentro de esta biblioteca se usan los siguientes métodos:
Para serializar:
- método dump() -> volcado de datos al fichero binario externo. Serializa a un objeto de tipo fichero abierto.
- método load() -> carga de los datos del fichero binario externo. Deserializa a un objeto del tipo del fichero abierto.

- dumps(): serializa en una cadena.
- loads(): deserializa desde una cadena.
