import os
import random

jogarNovamente='s'
jogadas=0
quemJoga=2
maxJogadas=9
vit="n"
velha=[["","",""],["","",""],["","",""]]

def tela():
    global velha
    global jogadas
    os.system("cls")
    print("    0   1   2")
    print(f"0: {velha[0][0]}   | {velha[0][1]} | {velha[0][2]}")
    print("  -------------")
    print(f"1: {velha[1][0]}   | {velha[1][1]} | {velha[1][2]}")
    print("  -------------")
    print(f"2: {velha[2][0]}   | {velha[2][1]} | {velha[2][2]}")
    print(f"Jogadas: {jogadas}")

def jogadorJoga():
    global jogadas
    global quemJoga
    global vit
    global maxJogadas
    if(quemJoga==2 and jogadas<maxJogadas):
        l=int(input("Linha: "))
        c=int(input("Coluna: "))
        while velha[l][c]!=" ":
            l=int(input("Linha: "))
            c=int(input("Coluna: "))
        try:
            velha[l][c]="X"
            quemJoga=1
            jogadas+=1
        except:
            print("Linha ou coluna inválida")
            #vit="n"

def cpuJoga():
    global jogadas
    global quemJoga
    global vit
    global maxJogadas
    if quemJoga==1 and jogadas<maxJogadas:
        l=random.randrange(0,3)
        c=random.randrange(0.3)
        while velha[l][c]!=" ":
            l=random.randrange(0,3)
            c=random.randrange(0,3)
        velha[l][c]="O"
        jogadas+=1
        quemJoga=2

while True:
    tela()
    jogadorJoga()
    cpuJoga()