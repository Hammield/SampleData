#include <iostream>
using namespace std;

class Aviao{
	public:
		int vel=0;
		int velMax;
		string tipo;
		void ini(int tp);
	private:
};

void Aviao::ini(int tp){
	if(tp==1){
		this->velMax=800;
		this->tipo="Jato";
	}else if(tp==2){
		this->velMax=350;
		this->tipo="Monomotor";
	}else if(tp==3){
		this->velMax=180;
		this->tipo="Planador";
	}
}

int main(){
	
	Aviao *av1=new Aviao();
	
	Aviao *av2=new Aviao();
	
	av2->ini(3);
	cout << av2->velMax << endl;
	
	av1->ini(1);
	
	cout << av1->velMax;
	
	return 0;
}
