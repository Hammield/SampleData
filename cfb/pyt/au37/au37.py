import os,json
os.system('cls')

carros_dictionary={"marca":"honda","modelo":"HRV","cor":"prata"}

carros_list=["honda","volkswagem","ford","fiat","chevrolet"]

carros_tupla=("honda","volkswagem","ford","fiat","chevrolet")

carros_j=json.dumps(carros_dictionary,indent=4,separators=(">","="),sort_keys=True)

print(carros_j)