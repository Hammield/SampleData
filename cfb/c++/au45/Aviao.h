#ifndef AVIAO_H_INCLUDED
#define AVIAO_H_INCLUDED

using namespace std;

	class Aviao{
	public:
		int vel=0;
		int velMax;
		Aviao(int tp);
		void imprimir();
	private:
	};
	
	Aviao::Aviao(int tp){
			if(tp==1){
				velMax=800;
			}else if(tp==2){
				velMax=350;
			}else if(tp==3){
				velMax=180;
		}
	}
	
	void Aviao::imprimir(){
		//std::cout << "Velocidade Maxima: " << velMax << "\n";
	}

	#endif //AVIAO_H_INCLUDED
