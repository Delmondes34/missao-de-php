<?php

require_once 'conexao.php';

if(isset($_POST['atualHist'])){

    
    $nomDaHis = mysqli_escape_string($conectar, $_POST['nome_da_historia']);
   
    $generos = mysqli_escape_string($conectar, $_POST['id_genero']);
    
    $historia = mysqli_escape_string($conectar, $_POST['historia']);
    
    $id = mysqli_escape_string($conectar, $_POST['id']); 

    $sql = "UPDATE historias SET nome_da_historia = '$nomDaHis', id_genero = '$generos', historia = '$historia' WHERE id = '$id' ";

    /*$sql1="SELECT historias.id, historias.nome_da_historia, generos.genero, historias.historia FROM historias INNER JOIN generos ON historias.id_genero=generos.id_genero;";*/
            
    if(mysqli_query($conectar , $sql)){

        header('Location: ../index.php?sucesso');
    }else{
        header('Location: ../index.php?erro');
    }
}
?>