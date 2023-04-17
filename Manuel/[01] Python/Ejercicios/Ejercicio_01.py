# Solicitar 2 números, y decir si son mayor, menor o iguales

n1 = int(input("\nDame un número entero: "))
n2 = int(input("Dame otro número entero: "))

print(f"\nEl primer número es {n1}")
print(f"El segundo número es {n2}") 

if(n1==n2):
    print("\nLos números son iguales")
else:
    if(n1>n2):
        print(f"\n{n1} es mayor que {n2}")
    else:
        print(f"\n{n1} es menor que {n2}")

