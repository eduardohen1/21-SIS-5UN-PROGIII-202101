<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gerenciamento de alunos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>
    <link rel="shortcut icon" href="img/studentmeets_4873.ico" />
</head>
<body class="text-center">
    <div class="container">
        <form class="form-signin"
            method="post"
            action="redirect.php">
            <img 
                class="mb-4" 
                src="img/studentmeets_4873.png" 
                alt="SysAlunos" 
                width="80" height="80">
                <div class="mb-3">
            <label for="txtEmail" class="form-label">Endereço de e-mail</label>
            <input type="email" class="form-control" id="txtEmail" name="txtEmail" >
            <div class="mb-3">
                <label for="txtSenha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="txtSenha" name="txtSenha">
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>