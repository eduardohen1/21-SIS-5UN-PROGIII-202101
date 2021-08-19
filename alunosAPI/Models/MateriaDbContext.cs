using Microsoft.EntityFrameworkCore;

namespace alunosAPI.Models
{
    public class MateriaDbContext : DbContext
    {
        //construtor
        public MateriaDbContext(DbContextOptions<MateriaDbContext> options) : base(options){}
        public DbSet<Materia> Materias{get; set;}
    }
}