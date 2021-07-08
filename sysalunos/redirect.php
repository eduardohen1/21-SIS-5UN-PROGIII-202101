<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>
    <link rel="shortcut icon" href="img/studentmeets_4873.ico" />
</head>
<body>
    <?php
        //$_GET pegar parametro da URL
        //$user     = $_GET["user"];
        //$password = $_GET["password"];

        //conectar em banco de dados:
        $conexao = mysqli_connect(
                        "localhost",
                        "root",
                        "123456",
                        "alunos"
                    );
        if(!$conexao){
            echo "
            <div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>Erro ao entrar no sistema!</h4>
                <p>Não foi possível conectar no banco de dados!</p>
                <hr>
                <p class='mb-0'><a href='index.php'>Voltar.</a></p>
            </div>
            ";
            exit;
        }

        //$_POST pegar parametro do form enviado pelo POST
        $user     = $_POST["txtEmail"];
        $password = $_POST["txtSenha"];
        
        //buscar dados de usuário no bd:
        $validou = false;
        $erro = "";
        $nome = "";
        $sql = "SELECT email, senha, nome FROM usuarios WHERE email = '$user'";
        $resposta = mysqli_query($conexao, $sql);
        if($rows=mysqli_fetch_row($resposta)){
            if($password == $rows[1]){
                $validou = true;
                $nome = $rows[2];
            }
            else{
                $erro = "Senha errada.";
            }
        }else{
            $erro = "Endereço de e-mail não cadastrado.";
        }

        if($validou){
            //echo "<h1>Olá $nome!!</h1>";
            header("location:admin.php?nome=$nome");
        }else{            
            echo "
            <div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>Erro ao entrar no sistema!</h4>
                <p>$erro<br>
                Tente entrar novamente.</p>
                <hr>
                <p class='mb-0'><a href='index.php'>Voltar.</a></p>
            </div>
            ";
        }
    ?>
</body>
</html>