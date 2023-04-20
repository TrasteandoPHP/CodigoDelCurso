#numero = int(input("Dame un número: "))
#print(numero)

# Forzar a que solo se pueda introducir un número
#numero = int(input("Dime un número: "))

# #print(numero.isnumeric())
# while numero.isnumeric() == False:
#     numero = (input("Tiene que ser un número: "))

# print(type(numero).__name__)
# if type(numero).__name__ == "str":



# Excepciones
try: 
    numero = int(input("Teclea un número: "))
except ValueError:
    numero = (input("Teclea (tiene que ser) un número: "))
    while numero.isnumeric() == False:
        numero = (input("Tiene (tiene que ser) un número: "))
finally:
    print("Ok. Fuiste capaz de poner un número ;-)")    
