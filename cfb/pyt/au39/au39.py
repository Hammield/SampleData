import os,json
os.system('cls')

with open('C:/Users/Documentos/Documents/GitHub/SampleData/cfb/pyt/au39/au39.json') as f:
    jogador=json.load(f)

for c in jogador:
    print(c)