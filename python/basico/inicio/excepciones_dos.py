# en python pueden encadenarse varias excepciones con un solo try.
# Puede acompañarse de except o de finally

def divide():
    try:
        op1=float(input("Introduce el primer número: "))
        op2=float(input("Introduce el segundo número: "))
        
        print("El resultado de la división es: " + str(op1/op2))
        
    except ValueError:
        print("El valor introducido es erróneo")
    except ZeroDivisionError:
        print("No se puede dividir entre 0.")
    
    finally: #recordar que el finally se ejecuta siempre, entre o no dentro de las excepciones
        print("Fin")
    
    """ 
    Para poner una excepción genérica
    except:
        print("Error genérico") """

divide()