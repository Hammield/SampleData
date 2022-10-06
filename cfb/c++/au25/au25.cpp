#include <iostream>
using namespace std;

void cont();

int main(){
	
	cont();
	
	return 0;
}

void cont(){
	int num;
	int val;
	 
	cout << "Ate qual numero deve ser contado? (apenas numeros positivos) (0 para cancelar)";
	cin >> val;
	cout << "\n";
	
	if(val < 0){
		val*=-1;
		cout << "invertendo o sinal do numero" << "\n";
	}
	
	for(num=1;num<=val;num++){
		cout << num << "\n";
	}
	
}
