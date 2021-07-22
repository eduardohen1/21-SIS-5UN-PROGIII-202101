<?php
    $conexao_bd = mysqli_connect(
        "localhost",
        "root",
        "123456",
        "alunos"
    );
    if(!$conexao_bd){
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
?>