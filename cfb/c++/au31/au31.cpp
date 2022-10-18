#include <iostream>
#include <list>
using namespace std;

int main(){
	
	list <int> aula;
	int tam=10;
	list<int>::iterator it;
	
	for(int i=1;i<=tam;i++){
		aula.push_front(i);
	}
	
	it=aula.begin();
	advance(it,5);
	
	aula.insert(it,0);
	
	cout << "Tamanho da lista: " << aula.size() << "\n\n";
	
	aula.reverse();
	
	tam=aula.size();
	for(int i=1;i<=tam;i++){
		cout << aula.front() << "\n";
		aula.pop_front();
	}
	
	return 0;
}
