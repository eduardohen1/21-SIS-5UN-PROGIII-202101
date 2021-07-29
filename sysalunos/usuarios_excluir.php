<?php
    session_start();
    require_once("variaveis.php");
    require_once("conexao.php");

    $IdUsuario = $_GET["idUsuario"];
    if(strlen($IdUsuario) > 0){
        $sql = "DELETE FROM usuarios WHERE idusuarios = $IdUsuario";
        mysqli_query($conexao_bd, $sql);
    }
    mysqli_close($conexao_bd);
    header("location:usuarios_list.php");
?>