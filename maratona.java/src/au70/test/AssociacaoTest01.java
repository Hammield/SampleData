package au70.test;

import au70.domain.Aluno;
import au70.domain.Local;
import au70.domain.Professor;
import au70.domain.Seminario;

public class AssociacaoTest01 {
    public static void main(String[] args) {
        Local local = new Local("Viçosa do Ceará");
        Aluno aluno = new Aluno("Teguinha",15);

        Professor professor = new Professor("Cleverson","Tudo");
        Aluno[] alunosParaSeminario = {aluno};

        Seminario seminario = new Seminario("Nada",alunosParaSeminario,local);
        Seminario[] seminariosDisponiveis = {seminario};

        professor.setSeminarios(seminariosDisponiveis);

        professor.imprime();
    }
}
