from tkinter import *

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


app.mainloop()