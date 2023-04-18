import sys
num1 = int(sys.argv[1])
num2 = int(sys.argv[2])

if(num1==num2):
    print("\nLos numeros son iguales")
else:
    if(num1>num2):
        print(f"\n{num1} es mayor que {num2}")
    else:
        print(f"\n{num1} es menor que {num2}")
