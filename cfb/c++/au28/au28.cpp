#include <iostream>
#include <stack>
using namespace std;

int main(){
	
	stack <string> cartas;
	cartas.push("mundo");
	cartas.push("estrela");
	cartas.push("louco");
	cartas.push("torre");
	
	cout << "Pilha:" << cartas.size() << '\n';
	
	cartas.pop();
	
	cout << "Pilha:" << cartas.top()<< '\n';
	
	return 0;
}
