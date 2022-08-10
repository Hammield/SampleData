val = int(input("Insira um valor: "))
fim = int(input(f"{val} deve ser multiplicado até qual valor? "))

print()

for c in range(1,fim+1,1):
    mult = val * c
    print(f"{val} x {c} = {mult} ") 