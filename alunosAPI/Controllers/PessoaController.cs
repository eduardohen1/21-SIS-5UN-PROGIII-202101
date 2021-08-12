using System.Collections.Generic;
using alunosAPI.Models;
using alunosAPI.Repository;
using Microsoft.AspNetCore.Mvc;

namespace alunosAPI.Controllers
{
    [Route("api/[Controller]")] //no navegador fica assim: https://localhost:5001/api/Pessoa
    public class PessoaController : Controller
    {
        //Atributos:
        private readonly IPessoaRepository pessoaRepository;
        //Construtor:
        public PessoaController(IPessoaRepository pessoaRepository){
            this.pessoaRepository = pessoaRepository;
        }

        /*Métodos HTML - Verbos:
            GET    - Trazer a informação
            POST   - Adicionar (new)
            PUT    - Atualizar (update)
            DELETE - Remover (delete)
        */
        [HttpGet]
        public IEnumerable<Pessoa> GetAll(){
            return pessoaRepository.GetAll();
        }

        [HttpGet("{idpessoas}", Name="GetPessoa")]
        public IActionResult GetById(long idpessoas){
            var pessoa = pessoaRepository.Find(idpessoas);
            if(pessoa == null)
                return NotFound(); //status code 404
            return new ObjectResult(pessoa);
        }

        [HttpPost]
        public IActionResult Create([FromBody]Pessoa pessoa){
            if(pessoa == null)
                return BadRequest(); //status code 400
            pessoaRepository.Add(pessoa);
            return CreatedAtRoute("GetPessoa", new{idpessoas = pessoa.idpessoas},pessoa);
        }

    }
}