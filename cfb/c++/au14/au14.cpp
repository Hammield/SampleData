#include <iostream>
using namespace std;

int main(){
	
	int cont = 1;
	int num = 0;
	int quant;
	
	cout << "Digite um numero inteiro: ";
	cin >> num;
	
	cout << "Ate qual valor esse numero deve ser multiplicado? ";
	cin >> quant;
	
	if (quant <= 0){
		cout << "\nincapaz de calcular por esse valor, exibindo tabuada ate 10 do valor inserido.\n";
		quant = 10;
	}
	
	while (cont <= quant){
		cout << "\n" << num << "x" << cont << "=" << num*cont << "\n";
		cont++;
	}
	
	cout << "\n";
	
	system("pause");
	
	return 0;
}
