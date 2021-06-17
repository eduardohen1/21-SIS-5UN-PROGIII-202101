function validarFormulario(){
   var resposta = true;

   //buscar os dados do formulário
   var nome     = document.getElementById("txtNome").value;
   var email    = document.getElementById("txtEmail").value;
   var senha    = document.getElementById("txtSenha").value;
   var idade1   = document.getElementById("idade1").checked;
   var idade2   = document.getElementById("idade2").checked;
   var idade3   = document.getElementById("idade3").checked;
   var concordo = document.getElementById("chkConcorda").checked;

   //tamanho de campo
   if(nome.length == 0){
      alert("Campo nome em branco. Verifique!");
      resposta = false;
   }
   if(nome.length > 50 && resposta){
      alert("Nome não pode ter mais de 50 caracteres. Verifique!");
      resposta = false;
   }
   if(email.length == 0 && resposta){
      alert("Campo e-mail em branco. Verifique!");
      resposta = false;
   }
   
   //validar senha:
   //Se a senha está em branco
   //Se a senha tem menos de 6 caracteres... >= 6 caracter
   if(senha.length == 0 && resposta){
      alert("Campo senha em branco. Verifique!");
      resposta = false;
   }
   if(senha.length < 6 && resposta){
      alert("A senha deve conter no mínimo 6 caracters. Verifique!");
      resposta = false;
   }

   //validar as idades:
   if(resposta){
      if(!idade1 && !idade2 && !idade3){
         alert("Selecione uma opção de idade!");
         resposta = false;
      }
   }
   //Selecionou o concorda?
   if(resposta){
      if(!concordo){
         alert("Você não aceita nossos termos??");
         resposta = false;
      }
   }

   if(resposta)
      alert("Todos os campos estão validados!!!");   
   
   return resposta;
}