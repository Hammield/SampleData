#include <iostream>
#include <fstream>
#include <cstdlib>

int main(){
	
	fstream arquivo;
	char opc='s';
	
	arquivo.open("teguinha.txt",ios::out);
	
	while((opc=='s')or(opc=='S')){
		cout << "Digite um texto...";
		cin >> nome;
		arquivo << nome << "\n";
		cout << "\nDigitar um novo texto?[s/n";
		cin >> opc;
		System("CLS");
	};
	
	return 0;
}
