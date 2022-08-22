#include <iostream>
using namespace std;

int n1,n2; //Variáveis Globais

int main(){

	int n3,n4; //Variáveis locais
	int res1,res2;
	
	n1=11;
	n2=3;
	n3=5;
	n4=2;
	
	res1 = n1/n2;
	res2 = n1%n2;
	
	cout << "Resultado final:" << res1 << "\n";
	cout << "Restante da conta: " << res2 << "\n";
	
	
	return 0;
}
