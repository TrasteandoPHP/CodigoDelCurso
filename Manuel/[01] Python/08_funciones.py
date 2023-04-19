# funciones
print("Alfonso")
lista = ["Alfonso","Carro"]
diccionario = {"nombre":"Alfonso","apellido":"Carro"}
numero = 5
numero2 = 5.3
nombre = "Dino"
tupla = ("Alfonso","Carro")
print("-------------------------------")
print(type(lista))
print("-------------------------------")
print(type(diccionario))
print("-------------------------------")
print(type(numero))
print("-------------------------------")
print(type(numero2))
print("-------------------------------")
print(type(nombre))
print("-------------------------------")
print(type(tupla))
print("-------------------------------")

# Definiendo funciones en Python
def saludar():
    print("Buenos días")     

saludar() 

print("-------------------------------")

# Definiendo función con recepción de datos
def saluda_nombre(nom):
    print("Buenos días " + nom)

saluda_nombre("Manuel")

print("-------------------------------")

# Generar función que recoge datos y los devuelve
def sumar(n1, n2):
    suma = n1 + n2
    return suma

resultado = sumar(6,9)
print(f"El resultado de sumar 6 mas 9 es {resultado}")

print("-------------------------------")

# Función con valores predeterminados
def hola(nombre="Isa"):
    print(f"Hola {nombre}")

hola()
hola("Manuel")
print("-------------------------------")  

# Definiendo función con recepción de datos predeterminados
def resta(num1,num2):
    resta = num1 - num2
    return resta

resultado = resta(45,6)
print(f"El resultado de la resta es {resultado}")

print("-------------------------------")  

# Llamada con orden de paso
resultado = resta(num2=50,num1=25)
print(f"El resultado de la resta es {resultado}")
print("-------------------------------") 

resultado = resta(20, num2=5)
print(f"El resultado de la resta es {resultado}")
print("-------------------------------")

x = resta
resultado_resta = x(100,50)
print(f"El resultado de la resta es {resultado_resta}")
print("-------------------------------")

resultado = sumar(resta(5, 4),8)
print(f"El resultado de la resta es {resultado}")
print("-------------------------------")

# Definimos una función que no sabemos cuantos argumentos va a tener
def indeterminada(*datos):
    for dato in datos:
        if type(dato) is list:
            for elemento_lista in dato:
                print(elemento_lista)
            continue        
        print(dato)

# Otra forma:
# def indeterminada(*datos):
    # for dato in datos:
    #     if type(dato) is list:
    #         for elemento_lista in dato:
    #             print(elemento_lista)                  
    #     else:
    #         print(dato)        


## Llamamos a la función con argumentos indeterminados
indeterminada("Alfonso", "Carro", "Moris", 42, 1.78)
print("-------------------------------")

indeterminada("Manuel", "Casado")
print("-------------------------------")

indeterminada(numero, lista, ["Pedro", "Peche", "Cansado", "Off"], 100.52)
print("-------------------------------")

# Retorno múltiple
def multiple():
    return "Alfonso", "Carro", 42

nomb, ap, ed = multiple()
muchos = multiple()
print(nomb)
print(muchos[2])

print("-------------------------------")



