nombre = "manuel"
apellido = "casado"
mi_nombre_en_mayusculas = nombre.upper()
print(nombre.upper())
print(mi_nombre_en_mayusculas)

mi_nombre_en_minusculas = nombre.lower()
print(nombre.lower())
print(mi_nombre_en_minusculas)

nombre = nombre.replace("manuel", "manuel manuel manuel")
print(nombre)

print(nombre.count("u"))
print(nombre.count(""))
print(apellido.count('')) # Cuenta un caracter de mas

print(nombre.find("m"))

print(len(nombre))

print(nombre.index("m"))

trozos = nombre.split()
print(trozos)

print(trozos[0])

texto = "Javier"
texto2 = "Andrés"

print("Buenos días " + texto)
print(f"Buenos días {texto}")
print("buenos días {0}".format(texto))
print("buenos días {0} {1}".format(texto, texto2))