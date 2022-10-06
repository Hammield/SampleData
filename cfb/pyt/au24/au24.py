import os
os.system('cls')

class Carro:
    velMax=0
    ligado=False
    cor=""
    def __init__(self,v,l,c):
        self.velMax=v
        self.ligado=l
        self.cor=c
    def mostrar(self):
        print(f"Veloficade máxima: {self.velMax}")
        print(f"Cor: {self.cor}")
        estado="sim" if self.ligado else "Não"
        print(f"Ligado: {estado}")
        print()
    def ligar(self):
        self.ligado=True
    def desligar(self):
        self.ligado=False
    def andar(self):
        if(self.ligado):
            print("Andando")
        else:
            print("Carro parado")

c1=Carro(200,False,"azul")
c2=Carro(350,True,"cinza")
c3=Carro(275,True,"vermelho")


c1.mostrar()
c2.mostrar()
c3.mostrar()

c1.andar()
c2.andar()
