namespace alunosPage.Models
{
    public class Alunos
    {
        //Atributos da classe:
        public long idalunos {get; set;}
        public string matricula {get; set;}
        public string nome {get; set;}
        public string dt_nascimento {get; set; }
        public string dt_cadastro {get; set;}

        //Construtor:
        public Alunos(long   idalunos, 
                      string matricula, 
                      string nome,
                      string dt_nascimento, 
                      string dt_cadastro){
            this.idalunos = idalunos;
            this.matricula = matricula;
            this.nome = nome;
            this.dt_nascimento = dt_nascimento;
            this.dt_cadastro = dt_cadastro;
        }

    }
}