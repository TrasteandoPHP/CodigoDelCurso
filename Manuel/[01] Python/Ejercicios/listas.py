
entrada = input("Escribe un numero o un string (o salir para finalizar): ")

numeros=[]
strings=[]
print(type(entrada))

while entrada != "salir": 
    
    if entrada.isnumeric() == True:
        numeros.append(int(entrada))
    else:
        strings.append(entrada) 

    entrada = input("Escribe un numero o un string (o salir para finalizar): ")  

print(numeros)
print(strings)