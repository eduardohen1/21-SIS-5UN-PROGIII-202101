#pragma checksum "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "5d548ba5a3696e337c17701373194ebd45299fa6"
// <auto-generated/>
#pragma warning disable 1591
[assembly: global::Microsoft.AspNetCore.Razor.Hosting.RazorCompiledItemAttribute(typeof(AspNetCore.Views_Home_Teste), @"mvc.1.0.view", @"/Views/Home/Teste.cshtml")]
namespace AspNetCore
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Mvc;
    using Microsoft.AspNetCore.Mvc.Rendering;
    using Microsoft.AspNetCore.Mvc.ViewFeatures;
#nullable restore
#line 1 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\_ViewImports.cshtml"
using alunosPage;

#line default
#line hidden
#nullable disable
#nullable restore
#line 2 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\_ViewImports.cshtml"
using alunosPage.Models;

#line default
#line hidden
#nullable disable
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"5d548ba5a3696e337c17701373194ebd45299fa6", @"/Views/Home/Teste.cshtml")]
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"b2f52d5220d30fd2901e2e63b95cf125637bcb11", @"/Views/_ViewImports.cshtml")]
    public class Views_Home_Teste : global::Microsoft.AspNetCore.Mvc.Razor.RazorPage<IEnumerable<alunosPage.Models.Alunos>>
    {
        #pragma warning disable 1998
        public async override global::System.Threading.Tasks.Task ExecuteAsync()
        {
#nullable restore
#line 2 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
  
    ViewData["Title"] = "Teste de página";

#line default
#line hidden
#nullable disable
            WriteLiteral("<h1>");
#nullable restore
#line 5 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
Write(ViewData["Title"]);

#line default
#line hidden
#nullable disable
            WriteLiteral("</h1>\r\n\r\n<p>Testando a página Teste.</p>\r\n<div class=\"container\">\r\n    <table class=\"table table-striped\">\r\n        <tr>\r\n            <th>");
#nullable restore
#line 11 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
           Write(Html.DisplayNameFor(model => model.idalunos));

#line default
#line hidden
#nullable disable
            WriteLiteral("</th>\r\n            <th>");
#nullable restore
#line 12 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
           Write(Html.DisplayNameFor(model => model.nome));

#line default
#line hidden
#nullable disable
            WriteLiteral("</th>\r\n            <th>");
#nullable restore
#line 13 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
           Write(Html.DisplayNameFor(model => model.matricula));

#line default
#line hidden
#nullable disable
            WriteLiteral("</th>\r\n            <th>");
#nullable restore
#line 14 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
           Write(Html.DisplayNameFor(model => model.dt_nascimento));

#line default
#line hidden
#nullable disable
            WriteLiteral("</th>\r\n            <th>");
#nullable restore
#line 15 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
           Write(Html.DisplayNameFor(model => model.dt_cadastro));

#line default
#line hidden
#nullable disable
            WriteLiteral("</th>\r\n        </tr>\r\n");
#nullable restore
#line 17 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
         foreach (var item in Model)
        {

#line default
#line hidden
#nullable disable
            WriteLiteral("            <tr>\r\n                <td>");
#nullable restore
#line 20 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
               Write(Html.DisplayFor(modelItem => item.idalunos));

#line default
#line hidden
#nullable disable
            WriteLiteral("</td>\r\n                <td>");
#nullable restore
#line 21 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
               Write(Html.DisplayFor(modelItem => item.nome));

#line default
#line hidden
#nullable disable
            WriteLiteral("</td>\r\n                <td>");
#nullable restore
#line 22 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
               Write(Html.DisplayFor(modelItem => item.matricula));

#line default
#line hidden
#nullable disable
            WriteLiteral("</td>\r\n                <td>");
#nullable restore
#line 23 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
               Write(Html.DisplayFor(modelItem => item.dt_nascimento));

#line default
#line hidden
#nullable disable
            WriteLiteral("</td>\r\n                <td>");
#nullable restore
#line 24 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
               Write(Html.DisplayFor(modelItem => item.dt_cadastro));

#line default
#line hidden
#nullable disable
            WriteLiteral("</td>\r\n            </tr>\r\n");
#nullable restore
#line 26 "G:\Desenvolvimento\UEMG\21-SIS-5UN-PROGIII-202101\alunosPage\Views\Home\Teste.cshtml"
        }

#line default
#line hidden
#nullable disable
            WriteLiteral("    </table>\r\n</div>");
        }
        #pragma warning restore 1998
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.ViewFeatures.IModelExpressionProvider ModelExpressionProvider { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IUrlHelper Url { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IViewComponentHelper Component { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IJsonHelper Json { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IHtmlHelper<IEnumerable<alunosPage.Models.Alunos>> Html { get; private set; }
    }
}
#pragma warning restore 1591