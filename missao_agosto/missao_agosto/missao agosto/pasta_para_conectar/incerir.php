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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<form action="pasta_para_conectar/incerir.php" method="POST">
    <label for="">incerir classes</label>
    <input type="text" >

    <button type="submit" name="novaHist">incerir</button>

</form>




</body>
</html>