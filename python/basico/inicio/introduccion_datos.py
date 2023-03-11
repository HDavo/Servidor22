# Ejemplo de captura de datos por teclado usando if
# Se usa la función input, todo lo introducido mediante input es un string.

print("Programa de notas de alumnos.\nIntroduce tu nota.")

nota_alumno=int(input())


def evaluacion(nota):
    calificacion = ""
    if nota<5:
        calificacion = "Suspenso"
    elif nota==5:
        calificacion="Aprobado"
    elif nota==6:
        calificacion="Bien"
    elif nota==7 or nota==8:
        calificacion="Notable"
    else:
        calificacion="Sobresaliente"
    return calificacion


print(evaluacion(nota_alumno))