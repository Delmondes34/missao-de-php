<?php

require_once 'conexao.php';

if(isset($_POST['atualHist'])){

    $nomDaHis = mysqli_escape_string($conectar, $_POST['nome_da_historia']);
    $genero = mysqli_escape_string($conectar, $_POST['genero']);
    $historia = mysqli_escape_string($conectar, $_POST['historia']);

    $id = mysqli_escape_string($conectar, $_POST['id']); 
    
    $sql = "UPDATE historias SET nome_da_historia = '$nomDaHis', genero = '$genero', historia = '$historia' WHERE id = '$id' ";
    
    $sql2="SELECT * FROM generos ";
    
    
    if(mysqli_query($conectar , $sql , $sql2)){
        echo "sucesso";
        header('Location: ../index.php?sucesso');
    }else{
        header('Location: index.php?erro');
    }
}


?>