class Alumno:

    def saludar(self, nombre=""):
        print(f"Hi {nombre}")

    def despedir(self):
        print("Bye")    

pablo = Alumno()

pablo.saludar("Alfonso")

pablo.despedir()

juan = Alumno()

juan.saludar()

print("----------------------------------------------------")

# Definimos la clase Coche
class Coche:
    # En Python se puede omitir la declaración de los atributos

    # Definimos los métodos
    def mostrar_color(self):
        print(self.color)

    # Definimos el constructor de la clase con 3 propiedades.
    def __init__(self, mar, mod, col):
        self.marca = mar
        self.modelo = mod
        self.color = col


vehiculo1 = Coche("Seat","León","Rojo")

# Accedemos a las propiedades del objeto creado.
print(vehiculo1.marca)
print(vehiculo1.modelo)
print(vehiculo1.color)

print("----------------------------------------------------")

vehiculo1.mostrar_color()

print("----------------------------------------------------")

vehiculo1.marca = "Peugeot"
print(vehiculo1.marca)

