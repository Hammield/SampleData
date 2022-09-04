import os
os.system('cls')

carro={"Fabricante":"Honda",
"Modelo":"HRV",
"Ano":"2016",
"Cor":"Prata"}

carro['Cambio']="Automatico"
carro.pop('Cambio')

for x in carro:
    print(f"{x} = {carro[x]}")

print()

for k,v in carro.items():
    print(f"{k} = {v}")

carros={
    "Carro1":{
        "Fabricante":"Honda",
        "Modelo":"HRV"
    },
    "Carro2":{
        "Fabricante":"Volksvagem",
        "Modelo":"Golf"
    },
    "Carro3":{
        "Fabricante":"Ford",
        "Modelo":"Focus"
    }
}

print(carros)