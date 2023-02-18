
first = float(input("First: "))
second = float(input("Second: "))

operation = input("Select the type of operation you want to make:\n 1. Add\n 2. Substract\n 3. Multiply\n 4. Divide\n")

result = 0
def calc(operation):
    match operation:
        case "1":
            result = first + second
            return result
        case "2":
            result = first - second
            return result
        case "3":
            result = first * second
            return result
        case "4":
            result = first / second
            return result
        case _:
            return "Invalid option"
        

print("The result is: ", calc(operation))

#division  con redondeo directo

print(10 // 3)

# potencia

print(12 ** 3)