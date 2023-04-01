# Pasos previos
Para crear ejecutables es necesario instalar pyinstaller

`pip install pyinstaller`

# Creación del ejecutable

Después de haber instalado pyinstaller basta con situarse en el directorio del fichero del que queremos crear el ejecutable y ejecutar un comando dependiendo del resultado deseado:


## Por defecto (un directorio)

` pyinstaller nb_fichero.py`

El formato del ejecutable resultante dependerá del sistema operativo en dónde se ejecute el comando.
El ejecutable resultante (generado de esta manera), vendrá acompañado por una serie de ficheros que son necesarios para su funcionamiento.
Además, este método de creación genera un ejecutable que también abre la consola.


## Sin terminal (para windows y mac. Linux por defecto no saca la terminal)
` pyinstaller --windowed nb_fichero.py`

Esto también genera los ficheros que acompañan el fichero para su funcionamiento.


## Sin terminal ni ficheros 
` pyinstaller --windowed --onefile nb_fichero.py`


## Con icono
El fichero debe estar en la misma ruta que el fichero Python, debe usarse el comando de la siguiente manera:
` pyinstaller --windowed --onefile --icon=ruta nb_fichero.py`


## Más opciones
https://pyinstaller.org/en/stable/usage.html#options

***

# Resultado
El resultado del código de creación del ejecutable será distinto en función del modo de creación elegido, pero en todos los casos se creará un directorio dist en donde tendremos el ejecutable.






