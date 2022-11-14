import os,re
os.system('cls')

texto="Cleverson Teguinha da Silva é o governador de Viçosa do Ceará"
res = re.sub('e','a',texto)

print(res)