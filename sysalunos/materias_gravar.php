<?php
    session_start();
    require_once("variaveis.php");
    require_once("conexao.php");

    $IdMateria    = $_POST["txtIdMaterias"];
    $NomeMateria  = $_POST["txtNome"];
    $Periodo      = $_POST["txtPeriodo"];
    $CargaHoraria = $_POST["txtCargaHoraria"];
    
    if(strlen($IdMateria) > 0){
        if($IdMateria == 0){
            //novo usuário
            $sql = "INSERT INTO materias(nome, periodo, carga_horaria) 
                    VALUES('$NomeMateria', '$Periodo', $CargaHoraria)";
        }else{
            //editar usuário
            $sql = "UPDATE materias SET 
                        nome          = '$NomeMateria',
                        periodo       = '$Periodo', 
                        carga_horaria = $CargaHoraria
                    WHERE idmaterias = $IdMateria";
        }
        mysqli_query($conexao_bd, $sql);
    }
    mysqli_close($conexao_bd);
    header("location:materias_list.php");
?>