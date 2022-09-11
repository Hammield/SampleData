import os
os.system('cls')

class Carro:
    velMax=0
    ligado=False
    cor=""


c1=Carro()
c2=Carro()
c3=Carro()

c1.velMax=200
c1.ligado=True
c1.cor="vermelho"

c2.velMax=300
c2.ligado=True
c2.cor="cinza"

c3.velMax=270
c3.ligado=False
c3.cor="preto"

print(c1.cor)
