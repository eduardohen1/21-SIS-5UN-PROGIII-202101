using System.Collections.Generic;
using alunosAPI.Models;
using alunosAPI.Repository;
using Microsoft.AspNetCore.Mvc;

namespace alunosAPI.Controllers
{
    [Route("api/[Controller]")] //no navegador fica assim: https://localhost:5001/api/Materia
    public class MateriaController
    {
        //Atributos:
        private readonly IMateriaRepository materiaRepository;
        //Construtor:
        public MateriaController(IMateriaRepository materiaRepository){
            this.materiaRepository = materiaRepository;
        }    
        
        [HttpGet]
        public IEnumerable<Materia> GetAll(){
            return materiaRepository.GetAll();
        }
    }
}