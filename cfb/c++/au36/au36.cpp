#include <iostream>
using namespace std;

int main(){
	
	string veiculo="Carro";
	string *pv;
	
	/*int num = 8;
	int *pv2;
	pv2=&num;
	
	cout << "Endere�o: " << pv2 <<"\n\n";
	*/
	
	pv=&veiculo;//Ponteiro PV recebe o endere�o da vari�vel ve�culo
	
	cout << veiculo << "\n\n";
	
	cout << pv << "\n";
	
	*pv="Moto";//No endere�o apontado por *pv adicione o valor "Moto"
	
	cout << veiculo << "\n" << *pv;
	
	return 0;
}
