# Crear un diccionario
registros  = {"Nombre":"Alfonso", "Ap1":"Carro", "Ap2":"Moris", "Edad":"42"}

# Imprimir un diccionario
print(registros["Nombre"])
print(registros.keys())
print(registros.items())
print(registros.values())

encabezados = tuple(registros.keys())
print(encabezados[0])