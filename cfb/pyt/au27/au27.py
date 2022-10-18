import os
os.system('cls')

carros=[]

class Carro:
    nome=""
    pot=0
    velMax=0
    ligado=False
    def __init__(self,nome,pot):
        self.nome=nome
        self.pot=pot
        self.velMax=int(pot)*2
        self.ligado=False

    def ligar(self):
        self.ligado=True

    def desligar(self):
        self.ligado=False

    def info(self):
        print(f"Nome......: {self.nome}")
        print(f"Potência..: {self.pot}")
        print(f"Vel.Máxima: {self.velMax}")
        print(f"Ligado....: {self.ligado}")

def Menu():
    os.system("cls") or None
    print("1 - Novo Carro")
    print("2 - Informações do Carro")
    print("3 - Excluir Carro")
    print("4 - Ligar o Carro")
    print("5 - Desligar o Carro")
    print("6 - Listar os Carros")
    print("7 - Sair do Programa")
    print(f"Quantidade de carros: {len(carros)}")
    opc=int(input("Digite uma opção: "))
    return opc

def NovoCarro():
    os.system("cls") or None
    n=str(input("Nome do Carro: "))
    p=int(input("Potência do Carro: "))
    car=Carro(n,p)
    carros.append(car)
    print("Novo carro criado")
    os.system("pause")

def informacoes():
    os.system("cls") or None
    n=str(input("Informe o número do carro que deseja ver as informações: "))
    try:
        carros[int(n)].info()
    except:
        print("Carro não existe na lista")
    os.system("pause")

def excluirCarro():
    os.system("cls") or None
    n=str(input("Informe o número do carro que deseja excluir: "))
    try:
        del carros[int(n)]
    except:
        print("Carro não existe na lista")
    os.system("pause")

def ligarCarro():
    os.system("cls") or None
    n=str(input("Informe o número do carro que deseja ligar: "))
    try:
        carros[int(n)].ligar()
        print("Carro ligado")
    except:
        print("Carro não existe na lista")
    os.system("pause")

def desligarCarro():
    os.system("cls") or None
    n=str(input("Informe o número do carro que deseja desligar: "))
    try:
        carros[int(n)].desligar()
        print("Carro desligado")
    except:
        print("Carro não existe na lista")
    os.system("pause")

def listarCarro():
    os.system("cls") or None
    p=0
    for c in carros:
        print(f"{p} - {c.nome}")
        p+=1
    os.system("pause")