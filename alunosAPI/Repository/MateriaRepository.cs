using System.Collections.Generic;
using System.Linq;
using alunosAPI.Models;

namespace alunosAPI.Repository
{
    public class MateriaRepository : IMateriaRepository
    {
        //Atributo:
        private readonly MateriaDbContext materiaDbContext; //link com o BD
        //Construtor:
        public MateriaRepository(MateriaDbContext materiaDbContext){
            this.materiaDbContext = materiaDbContext;
        }

        //Métodos:
        public void Add(Materia materia)
        {
            materiaDbContext.Materias.Add(materia);
            materiaDbContext.SaveChanges();
        }

        public Materia Find(long idmaterias)
        {
            return materiaDbContext.Materias.FirstOrDefault(m => m.idmaterias == idmaterias);            
        }

        public IEnumerable<Materia> GetAll()
        {
            return materiaDbContext.Materias.ToList();
        }

        public void Remove(long idmaterias)
        {
            var materiaRemove = materiaDbContext.Materias.First(p => p.idmaterias == idmaterias);
            materiaDbContext.Materias.Remove(materiaRemove);
            materiaDbContext.SaveChanges();
        }

        public void Update(Materia materia)
        {
            materiaDbContext.Materias.Update(materia);
            materiaDbContext.SaveChanges();
        }
    }
}