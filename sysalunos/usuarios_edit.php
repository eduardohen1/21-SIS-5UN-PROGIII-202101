<?php
    session_start();
    require_once("variaveis.php");
    require_once("conexao.php");

    //recuperar os dados da sessão:
    $id_usuario = $_SESSION["id_usuario"];
    $tipoAcesso = $_SESSION["tipo_acesso"];

    //recuperar id de usuário
    $idUsuario = $_GET["idUsuario"];

    //validar se o código do usuário está na sessão:
    if(strlen($id_usuario) == 0){
        //header("location:index.php");
        echo "Usuario nao validado!!!!";
        exit;
    }

    //nome do usuário:
    $nome_usuario = "";
    $sql = "SELECT nome FROM usuarios WHERE idusuarios = $id_usuario";
    $resp = mysqli_query($conexao_bd, $sql);
    if($rows=mysqli_fetch_row($resp)){
        $nome_usuario = $rows[0];
    }
    
?>
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
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/studentmeets_4873.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                SysAlunos
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 50px;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="admin.php">Home</a>
                    </li>
                    <?php
                        $mnuCadastro   = "<li class='nav-item'><a class='nav-link active' href='#'>Cadastro de usuários</a></li>";
                        $mnuCadastroAl = "<li class='nav-item'><a class='nav-link' href='#'>Cadastro de alunos</a></li>";
                        $mnuConsultas  = "<li class='nav-item'><a class='nav-link' href='#'>Consultas</a></li>";
                        $mnuRelatorios = "<li class='nav-item'><a class='nav-link' href='#'>Relatórios</a></li>";
                        
                        if($tipoAcesso == 0){
                            echo $mnuCadastro;
                            echo $mnuCadastroAl;
                        }
                        if($tipoAcesso == 0 || $tipoAcesso == 1){
                            echo $mnuConsultas;
                        }
                        if($tipoAcesso == 0 || $tipoAcesso == 2){
                            echo $mnuRelatorios;
                        }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php     
        //Variáveis
        $NomeUsuario = "";
        $Email       = "";
        $Senha       = "";
        $Dica        = "";
        $TipoAcesso  = "";
        
        if($idUsuario == 0) {
          //novo usuario
          echo "<h1>Novo usuário:</h1>";
        }else{
           //editar usuario
            echo "<h1>Editar usuário:</h1>";
            $sql = "SELECT nome, email, senha, dica, tipoacesso 
                    FROM usuarios WHERE idusuarios = $idUsuario";
            $resp = mysqli_query($conexao_bd, $sql);
            if($rows=mysqli_fetch_row($resp)){
                $NomeUsuario = $rows[0];
                $Email       = $rows[1];
                $SEnha       = $rows[2];
                $Dica        = $rows[3];
                $TipoAcesso  = $rows[4];
            }
            mysqli_close($conexao_bd);
        }
    ?>
    <form class="row g-3" method="post" action="usuarios_gravar.php">
        <?php
            echo "<input type='hidden' id='txtIdUsuario' name='txtIdUsuario'
                    value='$idUsuario'>";
        ?>
        <div class="col-12">
            <label for="txtNome" class="form-label">Nome do usuário:</label>
            <input type="text" class="form-control" id="txtNome" name="txtNome" 
              placeholder="Nome do usuário" value="<?php echo $NomeUsuario; ?>">
        </div>
        <div class="col-md-6">
            <label for="txtEmail" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="txtEmail" name="txtEmail"
             placeholder="nome@nome.com" value="<?php echo $Email; ?>">
        </div>
        <div class="col-md-3">
            <label for="txtSenha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="txtSenha" name="txtSenha"
            value="<?php echo $Senha; ?>">
        </div>        
        <div class="col-3">
            <label for="txtDica" class="form-label">Dica:</label>
            <input type="text" class="form-control" id="txtDica" name="txtDica"
                placeholder="Dica da senha" value="<?php echo $Dica; ?>">
        </div>
        <div class="col-md-4">
            <label for="chkTipoAcesso" class="form-label">Tipo de acesso:</label>
            <select id="chkTipoAcesso" class="form-select" name="chkTipoAcesso">
                <?php
                if($idUsuario == 0) {
                    echo "<option value='X' selected>Selecione uma opção</option>";
                    echo "<option value='0' >Administrador</option>";
                    echo "<option value='1' >Consultas</option>";
                    echo "<option value='2' >Relatórios</option>";
                }else{
                    $selected[0] = "";
                    $selected[1] = "";
                    $selected[2] = "";
                    switch($TipoAcesso){
                        case 0: $selected[0] = "selected"; break;
                        case 1: $selected[1] = "selected"; break;
                        case 2: $selected[2] = "selected"; break;
                    }
                    echo "<option value='0' $selected[0]>Administrador</option>";
                    echo "<option value='1' $selected[1]>Consultas</option>";
                    echo "<option value='2' $selected[2]>Relatórios</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Gravar</button>
            <a class="btn btn-warning" href="usuarios_list.php" 
                role="button">Cancelar</a>
        </div>
    </form>
</body>
</html>