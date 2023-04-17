lista1 = ["Maseratti, Ferrari, Bugatti"]
#lista2 = list("Manzana" ,"Pera" ,"Melocoton")
lista2ok = list(("Manzana", "Pera", "Melocoton"))
colores = ["Azul", "Verde", "Naranja", "Rojo", "Amarillo"]

# Imprimir la posición que quiero
print(colores[0])

# Imprimir el tamaño de la lista
print(f"El tamaño de la lista es: {len(colores)}")

# Hay datos en la lista
print("Negro" in colores)
print("Azul" in colores)

# Añadir elementos a la lista
colores.append("Negro")
print("Negro" in colores)

# Añadir mas de un elemeto
colores.extend(["Morado", "Marron", "Verde"])
print(colores)
print(len(colores))

# Eliminar el último elemento de la lista
colores.pop()
print(colores)

# Eliminar por indice el que quieras
colores.pop(6)
print(colores)

# Eliminar por valor
colores.remove("Azul")
print(colores)

# Añadir un elemento en cualquier posición de la lista
colores.insert(1, "Azul")
print(colores)
colores.insert(len(colores), "Dorado")
print(colores)
# colores.clear()
# print(colores)

# Borrado de la variable
# del(colores)
# print(colores) # Error no se encuentra la variable

# Ordenar la lista por orden alfabetico
colores.sort()
print(colores)
colores.sort(reverse=True)
print(colores)

# Saber la posición de un elemento
print(colores.index("Rojo"))
print(colores)

# Vamos a hacer una asignación
colores[0] = "Rosa"
print(colores)