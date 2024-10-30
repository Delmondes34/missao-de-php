<?php
//chamado o codigo para chamar o banco
require_once 'conexao.php';
//chando o metodo e o botão para a inserrir o o codigo no banco
if(isset($_POST['novaHist'])){
    
    /*$consultar=mysqli_query($conectar, "Select * FROM generos ");
    $generos = mysqli_fetch_object($consultar);*/
    
    //chamando a tabela para dar nome a nova historia
    $nomDaHis = mysqli_escape_string($conectar, $_POST['nome_da_historia']);

    //chamando a tabela inserrir o genero
    $genero = mysqli_escape_string($conectar, $_POST['id_genero']);

    //chamando a tabela para colocar a historia(sinopse)
    $historia = mysqli_escape_string($conectar, $_POST['historia']);
    
    //comando para chamar o banco e inserindo as informações pelas variaveis colocadas
    $sql = "INSERT INTO historias(nome_da_historia, id_genero, historia) VALUES ('$nomDaHis',' $genero','$historia') ";

    /*$sql1="SELECT historias.id, historias.nome_da_historia, generos.genero, historias.historia FROM historias INNER JOIN generos ON historias.id_genero=generos.id_genero;";*/
    
    //perguntando se o banco deu certo ou não
    if(mysqli_query($conectar , $sql, /*$sql1*/)){
        header('Location: ../index.php?sucesso');
    }else{
        header('Location: ../index.php?erro');
    }/*SELECT historias.id, historias.nome_da_historia, generos.genero, historias.historia from historias INNER JOIN generos ON historias.id_genero=generos.id_genero;*/

}
?>