<?php
    session_start();
    require_once("variaveis.php");
    require_once("conexao.php");

    $IdMateria = $_GET["idMateria"];
    if(strlen($IdMateria) > 0){
        $sql = "DELETE FROM materias WHERE idmaterias = $IdMateria";
        mysqli_query($conexao_bd, $sql);
    }
    mysqli_close($conexao_bd);
    header("location:materias_list.php");
?>