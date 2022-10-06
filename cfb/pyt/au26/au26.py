import os
os.system('cls')

x = 55

try:
    print(x)
except NameError:
    print("Não tem como não")
except:
    print("Sei lá")
else:
    print("Só funcionando")
finally:
    print("Cabou-se")


num=10

if num <1:
    raise Exception("Valor não permitido")


nome="Teguinha"

if not type(nome) is int:
    raise Exception("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA")
else:
    print(nome)