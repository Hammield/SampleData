#include <iostream>
using namespace std;

int main(){
	
	string veiculo="Carro";
	string *pv;
	
	/*int num = 8;
	int *pv2;
	pv2=&num;
	
	cout << "Endereço: " << pv2 <<"\n\n";
	*/
	
	pv=&veiculo;//Ponteiro PV recebe o endereço da variável veículo
	
	cout << veiculo << "\n\n";
	
	cout << pv << "\n";
	
	*pv="Moto";//No endereço apontado por *pv adicione o valor "Moto"
	
	cout << veiculo << "\n" << *pv;
	
	return 0;
}
