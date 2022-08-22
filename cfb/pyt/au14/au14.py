import os

os.system('cls')

a = 1
b = 9

while (a <=10):
    print(f"{b} x {a} = {b*a}")
    a += 1

while (True):
    nome = str(input("Insira o seu nome: ").upper())
    if nome == "Teguinha".upper():
        break
    else:
        print("Não é o Teguinha.")
print("Cleverson Teguinha")

carros=["Uno","Brasília","Onix","Focus","Prisma","Ford T"]

tam = len(carros)
i = 0
while (i < tam):
    print(f"{carros[i]}")
    i += 1
print("Fim.")