class Operaciones:

    def __init__(self):
        self.n1 = int(input("Escribe el 1º número para realizar las operaciones: "))
        self.n2 = int(input("Escribe el 2º número para realizar las operaciones: "))
        #self.sumar()

    def sumar(self):
        suma = self.n1 + self.n2
        print(f"La suma de {self.n1} mas {self.n2} es {suma}")
        print("-------------------------------------------------------")   
    
    def restar(self):
        resta = self.n1 - self.n2
        print(f"La resta de {self.n1} menos {self.n2} es {resta}")
        print("-------------------------------------------------------")

    def multiplicar(self):
        multiplicacion = self.n1 * self.n2
        print(f"La multiplicación de {self.n1} por {self.n2} es {multiplicacion}")
        print("-------------------------------------------------------") 

    def dividir(self):
        if self.n2==0:
            print("No se puede realizar la operacion.")
        else:
            division = round(self.n1/self.n2, 2)
            print(f"La división de {self.n1} entre {self.n2} es {division}")
            print("-------------------------------------------------------")     
    
    def realizar_operaciones(self):
        self.sumar()
        self.restar()
        self.multiplicar()
        self.dividir()

operacion = Operaciones()
print("\n") 
operacion.sumar()
print("-------------------------------------------------------") 
operacion.restar()
print("-------------------------------------------------------") 
operacion.multiplicar()
print("-------------------------------------------------------") 
operacion.dividir()
print("-------------------------------------------------------") 
operacion.realizar_operaciones()




