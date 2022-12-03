from tkinter import *

app=Tk()
app.title("Cleverson Teguinha")
app.geometry("500x300")
app.configure(background="#008")

txt1=Label(app,text="Cleverson Teguinha da Silva",bg="#ddd",foreground="#000")
txt1.place(x=10,y=10,width=150,height=30)

vtxt2="Viçosa do Ceará"

txt2=Label(app,text=vtxt2,bg="#ddd",foreground="#000")
#txt2.place(x=10,y=50,width=150,height=30)
txt2.pack(ipadx=20,ipady=20,padx=5,pady=5,side="top",fill=X,expand=True)

app.mainloop()