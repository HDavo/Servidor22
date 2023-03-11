# Python admite la concatenación de operadores dentro de un condicional

salario_presidente = int(input("Introduce el salario del presidente de la empresa: "))
print("Salario presidente: " + str(salario_presidente))

salario_director = int(input("Introduce el salario del director de la empresa: "))
print("Salario presidente: " + str(salario_director))

salario_jefe = int(input("Introduce el salario del jefe de la sección: "))
print("Salario presidente: " + str(salario_jefe))

salario_administrativo = int(input("Introduce el salario del administrativo de la empresa: "))
print("Salario presidente: " + str(salario_administrativo))

# Ejemplo de un condicional concatenado 

if salario_administrativo<salario_jefe<salario_director<salario_presidente:
    print("Escala de sueldos lógica")
else:
    print("Error en la escala de sueldos dentro de la empresa")
    
