#include <iostream>
#include <fstream>
using namespace std;

int main(){
	
	//ofstream, ifstream, fstream
	
	ofstream arquivo;
	
	arquivo.open("cleverson.txt",ios::app);
	
	arquivo << "\nTexto";
	
	arquivo.close();
	
	return 0;
}
