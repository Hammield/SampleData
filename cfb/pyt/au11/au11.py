print("""
Operações\nComeço:
[0] para encerrar\n
[1] para realizar uma tabuada\n
[2] para somar dois atributos\n
""")


while True:
    print("--/"*20)
    fun = int(input("Insira um número de operação: "))

    if fun == 0:
        break
    elif fun ==1:
        val = int(input("Qual valor deve ser multiplicado? "))
        cont = 1
        while cont <= 10:
            print(f"{val} x {cont} = {val*cont}")
            cont += 1
    elif fun==2:
        n1 = int(input("Valor número 1: "))
        n2 = int(input("Valor número 2: "))
        print(f"{n1} + {n2} = {n1+n2}")
    else:
        print("Utilize um operador válido. (caso deseje encerrar utilize o valor 0)")
print("-"*20)
print("Fim.")