using System.ComponentModel.DataAnnotations;

namespace alunosAPI.Models
{
    public class Pessoa
    {
        //atributos
        [Key]
        public long idpessoas {get; set;}
        public string nome {get; set;}
        public int idade {get; set;}
        public string cpf {get; set;}
    }
}