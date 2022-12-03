from tkinter import *
import os

c=os.path.dirname(__file__)
nomeArquivo=c+"\\nomes.txt"


def gravarDados():
    arquivo=open(nomeArquivo,"a")
    arquivo.write("Nome: %s" % vnome.get())
    arquivo.write("\nTelefone: %s" % vfone.get())
    arquivo.write("\nOBS: %s" % vtexto.get("1.0",END))
    arquivo.write("\n\n")
    arquivo.close()

app=Tk()
app.title("Cleverson Teguinha")
app.geometry("500x300")
app.configure(bg="#dde")

Label(app,text="Nome",background="#dde",foreground="#009",anchor=W).place(x=10,y=10,width=100,height=20)
vnome=Entry(app)
vnome.place(x=10,y=30,width=200,height=20)

Label(app,text="Telefone",background="#dde",foreground="#009",anchor=W).place(x=10,y=60,width=100,height=20)
vfone=Entry(app)
vfone.place(x=10,y=80,width=200,height=20)

Label(app,text="OBS",background="#dde",foreground="#009",anchor=W).place(x=10,y=100,width=100,height=20)
vtexto=Text(app)
vtexto.place(x=10,y=120,width=200,height=80)

Button(app,text="Gravar",command=gravarDados).place(x=10,y=270,width=100,height=20)


app.mainloop()