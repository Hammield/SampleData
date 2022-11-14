#include <iostream>
using namespace std;

struct Carro{
	string nome;
	string cor;
	int pot;
	int velMax;
	int vel=0;
	
	void insere(string stnome,string stcor,int stpot,int stvelMax){
		nome=stnome;
		cor=stcor;
		pot=stpot;
		velMax=stvelMax;
	}
	
	void mostra(){
		cout << "\nNome: " << nome << "\n";
		cout << "Cor: " << cor << "\n";
		cout << "Potencia: " << pot << "\n";
		cout << "Velocidade: " << vel << "\n";
		cout << "Velocidade Maxima: " << velMax << "\n\n";
	}
	
	void mudaVel(int mv){
		vel=mv;
		if(vel > velMax){
			vel=velMax;
		}
		if(vel<0){
			vel=0;
		}
	}
};

int main(){
	
	Carro *carros=new Carro[5];
	Carro car1,car2,car3,car4,car5;
	
	carros[0]=car1; carros[1]=car2; carros[2]=car3; carros[3]=car4; carros[4]=car5;
	
	carros[0].insere("Cleverson","Verde",800,700);
	carros[1].insere("Maravilha","Preto",300,300);
	carros[2].insere("Tornado","Vermelho",400,350);
	carros[3].insere("Teodoro","Ciano",400,300);
	carros[4].insere("Benjamim","Azul",50,20);
	
	carros[0].mudaVel(500);
		
	for(int i=0;i<5;i++){
		carros[i].mostra();
	}
	
	return 0;
}
