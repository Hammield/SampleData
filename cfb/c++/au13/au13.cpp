#include <iostream>
using namespace std;

int main(){
	
	int pos = 5;
	
	
	switch(pos){
		case 1:{
			cout << "Primeiro";
			break;
		}
		case 2:{
			cout << "Segundo";
			break;
		}
		default:{
			cout <<"Nenhum";
			break;
		}
	}
	
	return 0;
}
