# Flujos de Control

# Condicionales
num = 1
if(num==10):
    print("Es igual a 10")
else:
    print("No son iguales")  


# Condicional anidado
if num==10:
    print("Texto a mostrar")
    if num>10:
        print("Texto a mostrar")
    else:
        print("Texto a mostrar")
else:
    print("Texto a mostrar")


# Condicional con else if
if num==10:
    print("Texto a mostrar")
elif num>10:
    print("Texto a mostrar")
else:
    print("Texto a mostrar")


# Condicional con AND y con OR
if num > 10 and num < 20:
    print("Texto a mostrar")
elif num > 100 or num == 200:
    print("Texto a mostrar")
else:
    print("Texto a mostrar")                