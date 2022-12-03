#include <iostream>
#include <fstream>
#include <string>
using namespace std;

int main(){
/*	
	//ofstream, ifstream, fstream
	
	ofstream arquivoS;
	
	arquivoS.open("cleverson.txt",ios::app);
	
	arquivoS << "\nTexto";
	
	arquivoS.close();
*/	
	ifstream arquivoE;
	string linha;
	arquivoE.open("cleverson.txt");
	if(arquivoE.is_open()){
		while(getline(arquivoE,linha)){
			cout << linha << endl;
		}
		arquivoE.close();
	}else{
		cout << "Nao foi possivel abrir o arquivo." << endl;
	}
	
	return 0;
}
