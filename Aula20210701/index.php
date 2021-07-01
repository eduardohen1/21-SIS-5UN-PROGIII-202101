<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP - 01/07/2021</title>
    <link rel="shortcut icon" href="img/phpico2.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <?php
        /*
        echo "<h1>Nosso php rodando!</h1>";
        $x  = 10;
        $x  = $x+4;
        $x += 4;
        $x -= 1;
        $x += 3;
        echo "<p><strong>Qual o nome do filme?</strong></p>";
        echo "<p>'O Codigo dá $x'</p>";
        */
        //conectar no banco de dados:
        $conexao = mysqli_connect(
            "localhost",
            "root",
            "123456",
            "alunos"
        );
        if(!$conexao){
            echo "Erro de conexão: " . PHP_EOL;
            exit;
        }
        echo "Conectou!!!";
        echo "<br>";
        echo "Informações do host: ".mysqli_get_host_info($conexao);
        echo "<hr>";

    ?>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Login</th>
            <th scope="col">E-mail</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM usuarios ORDER BY nome";
                $resposta = mysqli_query($conexao, $sql);
                while($linha = mysqli_fetch_row($resposta)){
                    echo "<tr>";
                    echo "<th scope='row'>$linha[0]</th>";
                    echo "<td>$linha[1]</td>";
                    echo "<td>$linha[2]</td>";
                    echo "<td>$linha[5]</td>";
                    echo "<td><button type='button' class='btn btn-success'>OK $linha[1]</button></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <?php
        mysqli_close($conexao); //fechar conexao
    ?>
</body>
</html>