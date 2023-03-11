nota=int(input("Introduce tu nota "))
intentos=0

while nota<0 or nota>10:
    # print("Introduce una nota correcta. De 0 a 10.")
    
    
    if intentos==4:
        print("Has introducido una nota incorrecta demasiadas veces")
        break
    
    nota=int(input("Introduce tu nota correcta "))
    if nota<0 or nota>10:
        intentos+=1
        
    
    # print(intentos)     
    
        
if intentos<3:
    print("Gracias.\nTu nota ha sido: " + str(nota))
