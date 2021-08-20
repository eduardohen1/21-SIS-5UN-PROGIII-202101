using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AlunoAPI_Visual.model
{
    public class Pessoa
    {
        //Atributos:
        public long idpessoas { get; set; }
        public string nome { get; set; }
        public int idade { get; set; }
        public string cpf { get; set; }

        //Construtores:
        public Pessoa() { }
        public Pessoa(long idpessoas, string nome, int idade, string cpf)
        {
            this.idpessoas = idpessoas;
            this.nome = nome;
            this.idade = idade;
            this.cpf = cpf; 
        }
    }
}
