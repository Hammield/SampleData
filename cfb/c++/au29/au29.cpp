#include <iostream>
#include <stack>
using namespace std;

int main(){
	
	stack <string> cartas;
	cartas.push("Rei de Copas");
	cartas.push("Rei de Espadas");
	cartas.push("Rei de Ouros");
	cartas.push("Rei de Paus");
	
	cout << "Tamanho: " << cartas.size() << "\n";
	
	cout << "Carta do topo: " << cartas.top() << "\n";
	
	cartas.pop();
	cartas.pop();
	
	cout << "Nova carta do topo: " << cartas.top() << "\n";
	
	cout << cartas.empty();
	cout << "\n";
	
	return 0;
}
