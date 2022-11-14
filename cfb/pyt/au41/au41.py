from itertools import count
import re
from os import system
system('cls')

texto="Cleverson Teguinha da Silva lorem ipsum dolor sit"

if(res!= None):
    res=re.search("lorem",texto)

    print(res.start())
else:
    print("Not found")