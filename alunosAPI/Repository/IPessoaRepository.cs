using System.Collections.Generic;
using alunosAPI.Models;

namespace alunosAPI.Repository
{
    public interface IPessoaRepository
    {
        //CRUD:
        void Add(Pessoa pessoa); //Create - adicionar pessoa
        Pessoa Find(long idpessoas); //Read - pesquisar 1 pessoa
        IEnumerable<Pessoa> GetAll(); //Read - pesquisar a lista de todas as pessoas
        void Update(Pessoa pessoa); //Update - atualizar dados da pessoa
        void Remove(long idpessoas); //Delete - Remover uma pessoa
    }
}