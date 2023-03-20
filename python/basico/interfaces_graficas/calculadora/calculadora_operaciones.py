# funcionalidad de números sin usar lambda, solo con números enteros

from tkinter import *

raiz = Tk()

mi_frame=Frame(raiz)
mi_frame.pack()

# ******* Apartado de funcionalidad ******
operacion = ""
numero_pantalla = StringVar()
resultado = 0
reset_pantalla=False

# Pulsaciones de teclado números

def numero_pulsado(num):
    global operacion
    global reset_pantalla
    
    if reset_pantalla!=False: # al pulsar el botón suma deja de concatenar y escribe el número desde cero
        numero_pantalla.set(num)
        
        reset_pantalla = False
    else:
        numero_pantalla.set(numero_pantalla.get() + num)

# *******Función suma******

def suma(num): # num es lo que hay en pantalla al pulsar sobre la operación
    
    global operacion
    
    global resultado
    
    global reset_pantalla
    
    resultado +=int(num)
    
    operacion = "suma"
    
    reset_pantalla=True
    
    numero_pantalla.set(resultado)
    
# *******Función resta******
num1=0
contador_resta = 0

def resta(num):
    
    global operacion
    global resultado
    global num1
    global contador_resta 
    global reset_pantalla
    
    if contador_resta==0:
        num1=int(num)
        resultado=num1
    else:
        if contador_resta==1:
            resultado=num1-int(num)
            
        else:
            resultado=int(resultado)-int(num)	
            
        numero_pantalla.set(resultado)
        resultado=numero_pantalla.get()


    contador_resta=contador_resta+1
    
# *******Función multiplicación******
contador_multi=0

def multiplica(num):

	global operacion

	global resultado

	global num1

	global contador_multi

	global reset_pantalla
	
	if contador_multi==0:

		num1=int(num)
		
		resultado=num1

	else:

		if contador_multi==1:

			resultado=num1*int(num)

		else:

			resultado=int(resultado)*int(num)	

		numero_pantalla.set(resultado)
		
		resultado=numero_pantalla.get()


	contador_multi=contador_multi+1

	operacion="multiplicacion"

	reset_pantalla=True
 
# *******Función división******
contador_div=0

def divide(num):

	global operacion
	global resultado
	global num1
	global contador_div
	global reset_pantalla
	
	if contador_div==0:

		num1=float(num)
		
		resultado=num1

	else:

		if contador_div==1:

			resultado=num1/float(num)

		else:

			resultado=float(resultado)/float(num)	

		numero_pantalla.set(resultado)
		
		resultado=numero_pantalla.get()


	contador_div=contador_div+1

	operacion="division"

	reset_pantalla=True
    
# *******Función resultado final******

def dar_resultado():
    global resultado
    global operacion
    global contador_resta
    global contador_multi
    global contador_div
  
    if operacion=="suma":
        numero_pantalla.set(resultado+int(numero_pantalla.get()))
        # después de dar un resultado debemos poner el resultado a 0.
        resultado=0
    elif operacion == "resta":
        numero_pantalla.set(int(resultado)-int(numero_pantalla.get()))
        
        resultado=0
        contador_resta = 0
        
    elif operacion == "multiplicacion":
        numero_pantalla.set(int(resultado)*int(numero_pantalla.get()))
        
        resultado=0
        contador_multi=0
        
    elif operacion == "division":
        numero_pantalla.set(int(resultado)/int(numero_pantalla.get()))
        
        resultado=0
        contador_div=0

    
# *******Creación de la pantalla******
pantalla = Entry(mi_frame, textvariable=numero_pantalla)
pantalla.grid(row=1, column=1, padx=10, pady=10, columnspan=4)
pantalla.config(background="black", fg="#00ccff", justify="right")

# *******Fila 1*******

boton_7 = Button(mi_frame, text="7", width=3, command=lambda:numero_pulsado("7"))
boton_7.grid(row=2, column=1)
boton_8 = Button(mi_frame, text="8", width=3, command=lambda:numero_pulsado("8"))
boton_8.grid(row=2, column=2)
boton_9 = Button(mi_frame, text="9", width=3, command=lambda:numero_pulsado("9"))
boton_9.grid(row=2, column=3)
boton_div = Button(mi_frame, text="/", width=3, command=lambda:divide(numero_pantalla.get()))
boton_div.grid(row=2, column=4)


# *******Fila 2*******

boton_4 = Button(mi_frame, text="4", width=3, command=lambda:numero_pulsado("4"))
boton_4.grid(row=3, column=1)
boton_5 = Button(mi_frame, text="5", width=3, command=lambda:numero_pulsado("5"))
boton_5.grid(row=3, column=2)
boton_6 = Button(mi_frame, text="6", width=3, command=lambda:numero_pulsado("6"))
boton_6.grid(row=3, column=3)
boton_multi = Button(mi_frame, text="X", width=3, command=lambda:multiplica(numero_pantalla.get()))
boton_multi.grid(row=3, column=4)


# *******Fila 3*******

boton_1 = Button(mi_frame, text="1", width=3, command=lambda:numero_pulsado("1"))
boton_1.grid(row=4, column=1)
boton_2 = Button(mi_frame, text="2", width=3, command=lambda:numero_pulsado("2"))
boton_2.grid(row=4, column=2)
boton_3 = Button(mi_frame, text="3", width=3, command=lambda:numero_pulsado("3"))
boton_3.grid(row=4, column=3)
boton_resta = Button(mi_frame, text="-", width=3, command=lambda:resta(numero_pantalla.get()))
boton_resta.grid(row=4, column=4)


# *******Fila 4*******

boton_0 = Button(mi_frame, text="0", width=3, command=lambda:numero_pulsado("0"))
boton_0.grid(row=5, column=1)
boton_coma = Button(mi_frame, text=",", width=3, command=lambda:numero_pulsado(","))
boton_coma.grid(row=5, column=2)
boton_igual = Button(mi_frame, text="=", width=3, command=lambda:dar_resultado())
boton_igual.grid(row=5, column=3)
boton_suma = Button(mi_frame, text="+", width=3, command=lambda:suma(numero_pantalla.get()))
boton_suma.grid(row=5, column=4)


raiz.mainloop()