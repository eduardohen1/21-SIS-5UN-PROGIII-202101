using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using alunosPage.Models;

namespace alunosPage.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        //chama página Index
        public IActionResult Index()
        {
            return View();
        }

        //chama página Privacy
        public IActionResult Privacy()
        {
            return View();
        }

        //chamar nossa página de teste
        public IActionResult Teste(){
            var listaAlunos = new List<Alunos>(){
                new Alunos(1, "123", "Fulano",   "01/01/1990","01/01/2020"),
                new Alunos(2, "456", "Ciclano",  "01/02/1994","01/01/2020"),
                new Alunos(3, "789", "Beltrano", "01/05/1998","01/01/2020"),
                new Alunos(4, "134", "Tião",     "01/05/1998","01/01/2020"),
                new Alunos(5, "794", "Bastião",  "01/05/1998","01/01/2020")
            };
            return View(listaAlunos);
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
