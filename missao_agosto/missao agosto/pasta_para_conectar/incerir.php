<?php 

require_once 'conexao.php';

if(isset($_POST['novaHist'])){

    //chamando a tabela para dar nome a nova historia
    $incerir = mysqli_escape_string($conectar, $_POST['nome_da_historia']);
    
    //comando para chamar o banco e inserindo as informações pelas variaveis colocadas
    $sql = "INSERT INTO historias(nome_da_historia, genero, historia) VALUES ('$incerir')";

    //perguntando se o banco deu certo ou não
    if(mysqli_query($conectar , $sql)){
        header('Location: ../index.php?sucesso');
    }else{
        header('Location: ../index.php?erro');
    }
}
?>
