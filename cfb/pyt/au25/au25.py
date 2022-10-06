from distutils.log import info
import os
os.system('cls')

class NPC:
    def __init__(self,nome,time,forca,municao):
        self.nome=nome
        self.time=time
        self.forca=forca
        self.municao=municao
        self.vivo=True
        self.energia=100
    def info(self):
        print (f"""
        Nome: {self.nome}
        Time: {self.time}
        Força: {self.forca}
        Municão: {self.municao}
        Vivo: {self.vivo}
        Energia: {self.energia}
        """)


class Soldado(NPC):
    def __init__(self, nome, time, forca, municao):
        self.forca=200
        self.municao=200
        super().__init__(nome, time, self.forca, self.municao)

