#include <iostream>
using namespace std;

struct Carro{
	string nome;
	string cor;
	int pot;
	int velMax;
};


int main(){
	
	Carro car1;
	car1.nome="Teguinha";
	car1.cor="azul";
	car1.pot=500;
	car1.velMax=80;
	
	cout << car1.nome << "\n\n";
	
	return 0;
}

