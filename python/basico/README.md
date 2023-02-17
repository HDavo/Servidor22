## Concatenar

Se usa + para concatenar
```
name = input("What is your name? ")

print("Hello, " + name)
```
## Captura de datos

```
# para capturar inputs del usuario, devuelve lo introducido en forma de string
name = input("What is your name? ")

print("Hello, " + name)
```

## Conversión entre tipos de datos
```
int()
float()
bool()
str() 
```

## Ejemplo de creación de una variable
```
pepe = "humano"
```
***
## Para imprimir 
Tiene por defecto \n al final de cada impresión

```
print(pepe)

# Para especificar un separador específico, para uno de los strings especificados dentro de los paréntesis.

print("Hello", "how are you?", "Me llamo Pepe", sep="**") 
```
***
# Bucles
## Ejemplo de if
```
a = 2

if a!=0:
	print(a, 'No es cero.')
	if a>0:
		print(a, 'Es positivo.')
	if a<0:
		print(a, 'Es negativo.')
```

## Ejemplo de if else
```
a = 2
b = 4
c = 5

if a<b:
	print(a, 'is less than', b)
	if c<b:
		print(c, 'is less than', b)
	else:
		print(c, 'is not less than', b)
else:
	print(a, 'is not less than', b)
```
***
## For

### for
```
for i in range(12,45):
    print(i)
```

### for con lista y tuplas
*Las listas se diferencian de las tuplas en que las tuplas no pueden modificarse.<br> -Listas: se usan cuando sea necesario modificar el número de elementos.<br> -Tuplas:Indicadas para usarse dentro de diccionarios o de sets.*

Con lista
```
cosas = ["ratón", "teclado", "puntero","pantalla"]

for x in cosas:
    print(x)
```

Con tupla
```
cosas = ("ratón", "teclado", "puntero","pantalla")

for x in cosas:
    print(x)
```

Con diccionario
```
miscosas = {'perro':'python',
            'raza':'mestizo', 
            'color':'varios'
}

for x in miscosas:
	print(x, ':', miscosas[x])
```

Con sets
```
otracosa = {'ramon', 'pepe', 'paco'}

for x in otracosa:
	print(x)
```


Con un string
```
frase = 'Pepe tiene un perro'

for x in frase:
	print(x)
```

for anidados
```
for x in range(5):
    for y in range(6):
        print(x, end=' ')
    print()
```