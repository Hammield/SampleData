import os
os.system('cls')

carros=[["Modelo","HRV"],["Fabricante","Honda"],["Ano",2016]]

carros.append(["Cor","Prata"])

print(carros[2][1])
print()

"""
for x in carros:
    print(x)
    
"""

for l,c in carros:
    print(f"{l} = {c}\n")

print(type(carros[2][1]))