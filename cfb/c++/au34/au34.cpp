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
	
	Carro car1;
	
	car1.insere("Tornado","Vermelho",450,350);
	car1.mudaVel(80);
	car1.mostra();
	
	return 0;
}
