using System.Collections.Generic;
using System.Linq;
using alunosAPI.Models;

namespace alunosAPI.Repository
{
    public class PessoaRepository : IPessoaRepository
    {
        //Atributo:
        private readonly PessoaDbContext pessoaDbContext; //link com o BD
        //Construtor:
        public PessoaRepository(PessoaDbContext pessoaDbContext){
            this.pessoaDbContext = pessoaDbContext;
        }

        //Métodos:
        public void Add(Pessoa pessoa)
        {
            pessoaDbContext.Pessoas.Add(pessoa);
            pessoaDbContext.SaveChanges();
        }

        public Pessoa Find(long idpessoas)
        {
            return pessoaDbContext.Pessoas.FirstOrDefault(p => p.idpessoas == idpessoas);
        }

        public IEnumerable<Pessoa> GetAll()
        {
            return pessoaDbContext.Pessoas.ToList();
        }

        public void Remove(long idpessoas)
        {
            var pessoaRemove = pessoaDbContext.Pessoas.First(p => p.idpessoas == idpessoas);
            pessoaDbContext.Pessoas.Remove(pessoaRemove);
            pessoaDbContext.SaveChanges();
        }

        public void Update(Pessoa pessoa)
        {
            pessoaDbContext.Pessoas.Update(pessoa);
            pessoaDbContext.SaveChanges();
        }
    }
}