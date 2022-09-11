import os
os.system('cls')

"""def soma(*num):
    r=0
    for n in num:
        r+=n
        print(f"{r}")

print(soma(5,18,7))

def textos(*txt):
    for t in txt:
        print(t)

textos("Cleverson","Teguinha","da","Silva")"""

def somar(*num):
    r=0
    for n in num:
        r+=n

    print(f"Soma = {r}")

somar(5,2,3,4,9)