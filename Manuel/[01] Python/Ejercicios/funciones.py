# Función que recibe 2 números y nos da la suma
def sumar(n1, n2):
    return n1 + n2

# Función que recibe 2 números y nos da la resta
def restar(n1, n2):
    return n1 - n2

# Función que recibe 2 números y nos da la multiplicación
def multiplicar(n1, n2):
    return n1 * n2

# Función que recibe 2 números y nos da la división
def dividir(n1, n2):
    return n1 / n2

# Función que recibe datos y los muestra por pantalla
def mostrar(dato):
    print(f"El resultado es: {dato}")

# Ejercicio_02
def mostrar_datos(nombre, year, sexo):
    import datetime as fecha

    # Se podría hacer con una función que calcule la fecha
    hoy = fecha.datetime.now()
    anio = hoy.strftime('%Y')

    # Se podría hacer con una función que calcule el sexo
    if sexo == "H" or sexo == "h":
        sexo = "Masculino"
    elif sexo == "M" or sexo == "m":
        sexo = "Femenino"
    else:
        sexo = "No binario" 

    edad = restar(int(anio),int(year))
    print("----------------------------------------------------------------------------------------------")
    print(f"\tTu nombre es {nombre}, tienes {edad} años de edad, y tu sexo es {sexo}")
    print("----------------------------------------------------------------------------------------------")
