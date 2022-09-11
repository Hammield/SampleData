#include <iostream>
using namespace std;

int main(){
	int cont =0;
	
	while (cont<=500000000000){
		cout << cont << "\n";
		cont++;
		if (cont>=25){
			break;
		}
	}
	
	
	return 0;
}
