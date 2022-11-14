import re,os
os.system('cls')

texto = "Cleverson Teguinha da Silva se encontra no estado do Ceará em Viçosa"

res = re.split(" ",texto)

print(res)

for t in res:
    print(t)
    