# Bucles
colores = ["Rojo", "Azul", "Verde", "Amarillo"]
print(colores)
print("-----------------")

# Bucle ... for
for color in colores:
    print(color)   
print("-----------------")    

# Bucle con comprobación
for color in colores:
    if color=="Verde":
        print(color)
print("-----------------")        
        

# Bucle con comprobación (break)
for color in colores:
    if color=="Verde":
        break
    print(color)
print("-----------------")   


# Bucle con comprobación (continue)
for color in colores:
    if color=="Verde":
        continue
    print(color)
print("-----------------") 


# Listas de listas
flores_colores = [["Rosa","Margarita","Hortensia","Clavel"],["Rojo", "Azul", "Verde", "Amarillo"]]
for lista in flores_colores:
    print(lista)
    print("----------------")
    for flor in lista:
        print(flor)
print("-----------------")        