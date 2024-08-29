<?php
//chamado o codigo para chamar o banco
require_once 'conexao.php';
//chando o metodo e o botão para a inserrir o o codigo no banco
if(isset($_POST['novaHist'])){

    //chamando a tabela para dar nome a nova historia
    $nomDaHis = mysqli_escape_string($conectar, $_POST['nome_da_historia']);

    //chamando a tabela inserrir o genero
    $genero = mysqli_escape_string($conectar, $_POST['genero']);
    
    //chamando a tabela para colocar a historia( sinopse )
    $historia = mysqli_escape_string($conectar, $_POST['historia']);
    
    //comando para chamar o banco e inserindo as informações pelas variaveis colocadas
    $sql = "INSERT INTO historias(nome_da_historia, genero, historia) VALUES ('$nomDaHis','$genero','$historia') ";

    //perguntando se o banco deu certo ou não
    if(mysqli_query($conectar , $sql)){
        header('Location: ../index.php?sucesso');
    }else{
        header('Location: ../index.php?erro');
    }
}
?>