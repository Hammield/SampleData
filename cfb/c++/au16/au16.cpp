#include <iostream>
using namespace std;

int main(){
	
	int cont=1;
	int val,fim;
	
	cout << "Digite um valor: ";
	cin >> val;
	
	cout << "Ate qual valor " << val << " deve ser multiplicado?\n";
	cin >> fim;
	
	if(fim<=0){
		cout << "Incapaz de multiplicar ate esse valor\nMostrando a tabuada ate o 10\n";
		fim=10;
	}
	
	do{
		cout << "\n" << val << "x" << cont << "=" << val*cont << "\n";
		cont++;
	}while(cont <=fim);
	
	return 0;
}
