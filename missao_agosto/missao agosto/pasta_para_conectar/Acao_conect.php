<?php

require_once 'conexao.php';

if(isset($_POST['novaHist'])){

    $nomDaHis = mysqli_escape_string($conectar, $_POST['nome_da_historia']);
    $genero = mysqli_escape_string($conectar, $_POST['genero']);
    $historia = mysqli_escape_string($conectar, $_POST['historia']);

    $sql = "INSERT INTO historia(nome_da_historia, genero, historia) VALUES ('$nomDaHis','$genero','$historia') ";

    if(mysqli_query($conectar , $sql)){
        header('Location: index.php?sucesso');
    }else{
        header('Location: index.php?erro');
    }

}
?>