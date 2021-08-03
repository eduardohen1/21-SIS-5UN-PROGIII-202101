<?php
    session_start();
    require_once("variaveis.php");
    require_once("conexao.php");

    //recuperar os dados da sessão:
    $id_usuario = $_SESSION["id_usuario"];
    $tipoAcesso = $_SESSION["tipo_acesso"];

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
    <script src="js/jquery.min.js" ></script>
    <link href="css/sweetalert2.css" rel="stylesheet">
    <script src="js/sweetalert2.js" ></script>
    <link rel="shortcut icon" href="img/studentmeets_4873.ico" />
</head>
<body>
<div class="container">
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
                            $mnuCadastro = "<li class='nva-item dropdown active'>
                                            <a class='nav-link dropdown-toggle' href='#' id='mnuCadastroDown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                            Cadastros
                                            </a>
                                            <ul class='dropdown-menu aria-labelledby='mnuCadastroDown'>
                                            <li><a class='dropdown-item' href='usuarios_list.php'>Cadastro de usuários</a></li>
                                            <li><a class='dropdown-item' href='#'>Cadastro de alunos</a></li>
                                            <li><a class='dropdown-item' href='materias_list.php'>Cadastro de matérias</a></li>
                                            <li><hr class='dropdown-divider'></li>
                                            <li><a class='dropdown-item' href='#'>Cadastro de materias por alunos</a></li>
                                            </ul>
                                        </li>";
                            $mnuConsultas  = "<li class='nav-item'><a class='nav-link' href='#'>Consultas</a></li>";
                            $mnuRelatorios = "<li class='nav-item'><a class='nav-link' href='#'>Relatórios</a></li>";
                            
                            if($tipoAcesso == 0){
                                echo $mnuCadastro;
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
        <h1>Listagem de matérias:</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Período</th>
                    <th scope="col">Carga horária</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT idmaterias, nome, periodo, carga_horaria FROM materias ORDER BY nome";
                $resp = mysqli_query($conexao_bd, $sql);
                while($rows=mysqli_fetch_row($resp)){
                    echo "<tr>";
                    echo "<th scope='row'>$rows[0]</th>";
                    echo "<td>$rows[1]</td>";
                    echo "<td>$rows[2]</td>";
                    echo "<td>$rows[3]</td>";
                    echo "<td>
                            <a class='btn btn-primary' href='materias_edit.php?idMateria=$rows[0]' 
                            role='button'>Editar</a>&nbsp;
                            <a class='btn btn-danger'  href='javascript:excluirMateria($rows[0])'
                            role='button'>Excluir</a>
                        </td>";
                    echo "</tr>";
                }
                mysqli_close($conexao_bd);
                ?>
            </tbody>
        </table>
        <a class="btn btn-lg btn-primary" href="materias_edit.php?idMateria=0" 
        role="button">Nova matéria</a>
</div>
    <script type="text/javascript">
        function excluirMateria(idMateria){
            Swal.fire({
                title: 'Deseja realmente exluir?',
                text: "Você deseja realmente excluir esta matéria?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'SIM',
                cancelButtonText: 'NÃO'
                }).then((result) => {
                if (result.value) {
                    window.location.href = "materias_excluir.php?idMateria=" + idMateria;
                }
            })
        }
    </script>
</body>
</html>