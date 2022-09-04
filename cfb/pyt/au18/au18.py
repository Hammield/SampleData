import random
import os
os.system('cls')

res = random.randint(0,100)
cont = 1

while True:
    per = int(input("Insira um número entre 0 e 100: "))
    if per == res:
        print(f"Você acertou, tentativa(s): {cont}")
        print()
        break
    elif per > res:
        print("Digite um número menor")
        cont +=1
    else:
        print("Digite um número maior.")
        cont +=1

print(f"Número: {res}")
