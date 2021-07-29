<?php
    session_start();
    require_once("variaveis.php");
    require_once("conexao.php");

    $IdUsuario   = $_POST["txtIdUsuario"];
    $NomeUsuario = $_POST["txtNome"];
    $Email       = $_POST["txtEmail"];
    $Senha       = $_POST["txtSenha"];
    $Dica        = $_POST["txtDica"];
    $TipoAcesso  = $_POST["chkTipoAcesso"];

    if(strlen($IdUsuario) > 0){
        if($IdUsuario == 0){
            //novo usuário
            $sql = "INSERT INTO usuarios(nome, email, senha, dica, tipoacesso, login) 
                    VALUES('$NomeUsuario', '$Email', '$Senha', '$Dica', $TipoAcesso, '')";
        }else{
            //editar usuário
            $sql = "UPDATE usuarios SET 
                        nome  = '$NomeUsuario',
                        email = '$Email', 
                        senha = '$Senha',
                        dica  = '$Dica', 
                        tipoacesso = $TipoAcesso
                    WHERE idusuarios = $IdUsuario";
        }
        mysqli_query($conexao_bd, $sql);
    }
    mysqli_close($conexao_bd);
    header("location:usuarios_list.php");
/*
    echo $IdUsuario . "<Br>" .
     $NomeUsuario . "<Br>" .
     $Email . "<Br>" .
     $Senha . "<Br>" .
     $Dica . "<Br>" .
     $TipoAcesso;
*/
?>