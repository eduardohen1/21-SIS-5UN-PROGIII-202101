using System.Collections.Generic;
using alunosAPI.Models;

namespace alunosAPI.Repository
{
    public interface IMateriaRepository
    {
        //CRUD:
        void Add(Materia materia); //Create - adicionar materia
        Materia Find(long idmaterias); //Read - pesquisar 1 materia
        IEnumerable<Materia> GetAll(); //Read - pesquisar a lista de todas as materias
        void Update(Materia materia); //Update - atualizar dados da materia
        void Remove(long idmaterias); //Delete - Remover uma materia
    }
}