using System.ComponentModel.DataAnnotations;

namespace alunosAPI.Models
{
    public class Materia
    {
        [Key]
        public long idmaterias {get; set;}
        public string nome{get; set;}
        public string periodo {get; set;}
        public int carga_horaria{get;set; }
    }
}