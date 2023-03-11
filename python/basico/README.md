Python siempre pasa las variables por referencia

Listas []
tuplas ()
diccionarios {}

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

## Operadores 

`i+=1 #python no tiene el operador ++ `
### De comparación

```
>
>=
<
<=
==
!=
```
### Lógicos
```
and
or
not
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

## Buscar dentro de un string 
```
etc = "strings in Python"

print(etc.find("h")) #devuelve la primera posición de la primera coincidencia, puede ser letra o string dentro de find

print(etc.replace("t", "c"))
print("str" in etc) #devuelve un boolean si hay o no coincidencia
```
***
# Bucles
## while
```
i = 1
while i < 10:
  print(i)
  if i == 3:
    break
  i += 1
```



## IF

### Ejemplo de if 

```
a = 2

if a!=0:
	print(a, 'No es cero.')
	if a>0:
		print(a, 'Es positivo.')
	if a<0:
		print(a, 'Es negativo.')
```

### Ejemplo de if + else
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

### Ejemplo de elsif

```
a = 45
b = 33
if b > a:
  print("b is greater than a")
elif a == b:
  print("a and b are equal")
else:
  print("a is greater than b")
```


***
## For

### for
```
for i in range(12,45):
    print(i)
```

### for con lista y tuplas
*Las listas se diferencian de las tuplas en que las tuplas no pueden modificarse.<br> -Listas: (son el equivalente de los arrays pero pueden guardar dentro distintos tipos de variables y se extienden de forma dinámica) se usan cuando sea necesario modificar el número de elementos.<br> -Tuplas:Indicadas para usarse dentro de diccionarios o de sets.*

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